<?php

namespace Kendo\UI;

class UploadLocalization extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Sets the text of the cancel button text.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function cancel($value) {
        return $this->setProperty('cancel', $value);
    }

    /**
    * Sets the text of the clear button.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function clearSelectedFiles($value) {
        return $this->setProperty('clearSelectedFiles', $value);
    }

    /**
    * Sets the drop zone hint.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function dropFilesHere($value) {
        return $this->setProperty('dropFilesHere', $value);
    }

    /**
    * Sets the header status message for uploaded files.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function headerStatusUploaded($value) {
        return $this->setProperty('headerStatusUploaded', $value);
    }

    /**
    * Sets the header status message for files that are being uploaded.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function headerStatusUploading($value) {
        return $this->setProperty('headerStatusUploading', $value);
    }

    /**
    * Sets the text for invalid file extension validation message.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function invalidFileExtension($value) {
        return $this->setProperty('invalidFileExtension', $value);
    }

    /**
    * Sets the text for the validation messages of invalid files when the batch property is true and when two or more files are not passing the validation.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function invalidFiles($value) {
        return $this->setProperty('invalidFiles', $value);
    }

    /**
    * Sets the text for an invalid maxFileSize validation message.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function invalidMaxFileSize($value) {
        return $this->setProperty('invalidMaxFileSize', $value);
    }

    /**
    * Sets the text for an invalid minFileSize validation message.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function invalidMinFileSize($value) {
        return $this->setProperty('invalidMinFileSize', $value);
    }

    /**
    * Sets the text of the remove button text.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function remove($value) {
        return $this->setProperty('remove', $value);
    }

    /**
    * Sets the text of the retry button text.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function retry($value) {
        return $this->setProperty('retry', $value);
    }

    /**
    * Sets the "Select..." button text.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function select($value) {
        return $this->setProperty('select', $value);
    }

    /**
    * Sets the status message for failed uploads.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function statusFailed($value) {
        return $this->setProperty('statusFailed', $value);
    }

    /**
    * Sets the status message for uploaded files.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function statusUploaded($value) {
        return $this->setProperty('statusUploaded', $value);
    }

    /**
    * Sets the status message for files that are being uploaded.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function statusUploading($value) {
        return $this->setProperty('statusUploading', $value);
    }

    /**
    * Sets the text of the "Upload files" button.
    * @param string $value
    * @return \Kendo\UI\UploadLocalization
    */
    public function uploadSelectedFiles($value) {
        return $this->setProperty('uploadSelectedFiles', $value);
    }

//<< Properties
}

?>
