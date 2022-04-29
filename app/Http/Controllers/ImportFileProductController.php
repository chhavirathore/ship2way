<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Models\ImportFileProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class ImportFileProductController extends Controller
{
//     public function uploadContent(Request $request)
//         {
//         $file = $request->file('uploaded_file');
//         if ($file) {
//         $filename = $file->getClientOriginalName();
//         $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
//         $tempPath = $file->getRealPath();
//         $fileSize = $file->getSize(); //Get size of uploaded file in bytes
//         //Check for file extension and size
//         $this->checkUploadedFileProperties($extension, $fileSize);
// //Where uploaded file will be stored on the server 
//         $location = 'uploads'; //Created an "uploads" folder for that
// // Upload file
//         $file->move($location, $filename);
// // In case the uploaded file path is to be stored in the database 
//         $filepath = public_path($location . "/" . $filename);
// // Reading file
//         $file = fopen($filepath, "r");
//         $importData_arr = array(); // Read through the file and store the contents as an array
//         $i = 0;
// //Read the contents of the uploaded file 
//         while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
//         $num = count($filedata);
// // Skip first row (Remove below comment if you want to skip the first row)
//         if ($i == 0) {
//         $i++;
//         continue;
//         }
//         for ($c = 0; $c < $num; $c++) {
//         $importData_arr[$i][] = $filedata[$c];
//         }
//         $i++;
//         }
//         fclose($file); //Close after reading
//         $j = 0;
//         foreach ($importData_arr as $importData) {
//         $name = $importData[1]; //Get user names
//         $email = $importData[3]; //Get the user emails
//         $j++;
//         try {
//         DB::beginTransaction();
//         ImportFileProduct::create([
//         'sku' => $importData[1],
//         'product_name' => $importData[2],
//         'loc1' => $importData[3],
//         'loc2' => $importData[4],
//         'loc3' => $importData[5],
//         'loc4' => $importData[6],
//         'stock' => $importData[6],
//         'record_threshold' => $importData[6],
//         'cost' => $importData[6],
//         ]);
// //Send Email
//         $this->sendSku($sku, $cost);
//         DB::commit();
//         } catch (\Exception $e) {
// //throw $th;
//         DB::rollBack();
//         }
//         }
//         return response()->json([
//         'message' => "$j records successfully uploaded"
//         ]);
//         } else {
// //no file was uploaded
//         throw new \Exception('No file was uploaded', Response::HTTP_BAD_REQUEST);
//         }   
//         }
//         public function checkUploadedFileProperties($extension, $fileSize)
//         {
//         $valid_extension = array("csv", "xlsx"); //Only want csv and excel files
//         $maxFileSize = 2097152; // Uploaded file size limit is 2mb
//         if (in_array(strtolower($extension), $valid_extension)) {
//         if ($fileSize <= $maxFileSize) {
//         } else {
//         throw new \Exception('No file was uploaded', Response::HTTP_REQUEST_ENTITY_TOO_LARGE); //413 error
//         }
//         } else {
//         throw new \Exception('Invalid file extension', Response::HTTP_UNSUPPORTED_MEDIA_TYPE); //415 error
//         }
//        }
// public function sendEmail($email, $name)
// {
// $data = array(
// 'email' => $email,
// 'name' => $name,
// 'subject' => 'Welcome Message',
// );
// Mail::send('welcomeEmail', $data, function ($message) use ($data) {
// $message->from('welcome@myapp.com');
// $message->to($data['email']);
// $message->subject($data['subject']);
// });
// }




  public function uploadFile(Request $request){

    if ($request->input('submit') != null ){

      $file = $request->file('file');

      // File Details 
      $filename = $file->getClientOriginalName();
      $extension = $file->getClientOriginalExtension();
      $tempPath = $file->getRealPath();
      $fileSize = $file->getSize();
      $mimeType = $file->getMimeType();

      // Valid File Extensions
      $valid_extension = array("csv");

      // 2MB in Bytes
      $maxFileSize = 2097152; 

      // Check file extension
      if(in_array(strtolower($extension),$valid_extension)){

        // Check file size
        if($fileSize <= $maxFileSize){

          // File upload location
          $location = 'uploads';

          // Upload file
          $file->move($location,$filename);

          // Import CSV to Database
          $filepath = public_path($location."/".$filename);

          // Reading file
          $file = fopen($filepath,"r");

          $importData_arr = array();
          $i = 0;

          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
             $num = count($filedata );
             
             // Skip first row (Remove below comment if you want to skip the first row)
             /*if($i == 0){
                $i++;
                continue; 
             }*/
             for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
             }
             $i++;
          }
          fclose($file);

          // Insert to MySQL database
          foreach($importData_arr as $importData){

            $insertData = array(
               "Product_name"=>$importData[1],
               "loc1"=>$importData[2],
               "loc2"=>$importData[3],
               "loc3"=>$importData[4],
               "loc4"=>$importData[5],
               "stock"=>$importData[6],
               "record_threshold"=>$importData[7],
               "cost"=>$importData[8]);
            ImportFileProduct::insertData($insertData);

          }

          Session::flash('message','Import Successful.');
        }else{
          Session::flash('message','File too large. File must be less than 2MB.');
        }

      }else{
         Session::flash('message','Invalid File Extension.');
      }

    }

    // Redirect to index
    return redirect()->route('upload-content');
  }

        
        
        
        
}
