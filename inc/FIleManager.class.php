<?php
/**
 * Class FileManager
 */
class FileManager {
   /**
    * @param string $filePath
    * @return string $fileContent
    */
   public static function readCsvFile( string $filePath ) : string {
      $fileContent = "";
      try {
			$fileHandle = fopen($filePath, 'r');
			if(! $fileHandle) {
				throw new Exception("$filePath not found");
			}
			$fileContent = fread($fileHandle, filesize($filePath));
			fclose($fileHandle);

		} catch(Exception $error) {
			echo $error -> getMessage();
		}
		return $fileContent;
   }

	public static function writeCsvFile( string $filePath, $fileContent ) {
		try {
			$fileHandle = fopen($filePath,"w");
			if(! $fileHandle) {
				throw new Exception("file not found");
			}
			fwrite($fileHandle,$fileContent);
		   fclose($fileHandle);

		} catch(Exception $error) {
			echo $error -> getMessage();
		}
	}
}