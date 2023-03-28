<?php
// Check the status of the user's request
if (mysqli_num_rows($result) > 0) {
    echo 'complete';
} else {
    echo 'incomplete';
}
?>
