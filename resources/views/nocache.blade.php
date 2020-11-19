<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>No cache</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<script>
        // function getMessage() {
            $.ajax({
               type:'get',
               url:'api/nocache',
               success:function(data) {
                //   console.log(data.data);
				$('.loader').hide();
               }
            });
        //  }
      </script>

        <style>
            body {
                font-family: 'Nunito';
            }

			.loader {
				border: 16px solid #f3f3f3; /* Light grey */
				border-top: 16px solid #3498db; /* Blue */
				border-radius: 50%;
				width: 120px;
				height: 120px;
				animation: spin 2s linear infinite;
			}

			@keyframes spin {
				0% { transform: rotate(0deg); }
				100% { transform: rotate(360deg); }
			}	
        </style>
    </head>
    <body class="antialiased">
		<div class="loader"></div>
    </body>
</html>
