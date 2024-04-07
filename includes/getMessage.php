<?php

if (isset($_SESSION["message"]) && isset($_SESSION["message"]["content"])) {
    echo '
        <div class="container col-md-8 text-center alert alert-' . $_SESSION["message"]["type"] . ' alert-dismissible fade show" role="alert">
        <strong>' . $_SESSION["message"]["content"] . '</strong>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
    ';

    $_SESSION["message"] = [];
}
