<?php
    function errorMessage() {
        if(isset($_SESSION['error_message'])) { ?>
            <div id="response-message" class="alert alert-danger">
                <strong>Error: </strong> <?php echo $_SESSION['error_message'];?>
            </div>
        <?php
            unset($_SESSION['error_message']);
        }
    }

    function successMessage() {
        if(isset($_SESSION['success_message'])) { ?>
            <div id="response-message" class="alert alert-success">
                <strong>Success: </strong> <?php echo $_SESSION['success_message'];?>
            </div>
        <?php
            unset($_SESSION['success_message']);
        }
    }
?>
<script>
    // fade out response message after 5 seconds
    setTimeout(function() {
        $('#response-message').fadeOut().text('');
    }, 5000 );
</script>