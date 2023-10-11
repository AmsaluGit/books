<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')) ?>
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([/*'normalize.min', 'milligram.min', 'fonts','cake', */'bootstrap.min', 'style']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>


    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?= $this->fetch('script') ?>
</head>

<body>

    <div class="container">
            <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

    </div>
    <footer>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script>
        function delete_row(element, row_id, item) {
            var csrfToken = $('meta[name="csrfToken"]').attr('content');

            var url = '/'+item+'/delete/' + row_id;

            Swal.fire({
                title: "<h5 style='color:#000'>Are you sure?</h5>",
                titleColor: 'blue',
                text: 'This action cannot be undone.',
                icon: 'error',
                background: '#fff',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform the delete action here
                    $.ajax({
                        type: "post",
                        url: url,
                        dataType: "json",
                        headers: {
                            'X-CSRF-Token': csrfToken // Include the CSRF token in the request headers
                        },
                        success: function(response) {
                            console.log('success');
                            console.log(response);
                            location.reload();
                        }
                    });
                }
            });
        }
    </script>

</body>

</html>
