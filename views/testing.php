<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta charset="utf-8">
    <style>
      body{
        font-family: 'Ubuntu', sans-serif;
      }
      .circular--square {
        padding: 10px;
        border-top-left-radius: 50% 50%;
        border-top-right-radius: 50% 50%;
        border-bottom-right-radius: 50% 50%;
        border-bottom-left-radius: 50% 50%;
        height: 200px;
        width: 200px;
      }


      /*  SECTIONS  */
      .section {
      clear: both;
      padding: 0px;
      margin: 0px;
      }

      /*  COLUMN SETUP  */
      .col {
      display: block;
      float:left;
      margin: 1% 0 1% 1.6%;
      }
      .col:first-child { margin-left: 0; }

      /*  GROUPING  */
      .group:before,
      .group:after { content:""; display:table; }
      .group:after { clear:both;}
      .group { zoom:1; /* For IE 6/7 */ }

      /*  GRID OF TWO  */
      .span_2_of_2 {
      	width: 100%;
      }
      .span_1_of_2 {
      	width: 49.2%;
      }

      /*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

      @media only screen and (max-width: 480px) {
      	.col {
      		margin: 1% 0 1% 0%;
      	}
      }

      @media only screen and (max-width: 480px) {
      	.span_2_of_2, .span_1_of_2 { width: 100%; }
      }

      /*  GRID OF THREE  */
      .span_3_of_3 { width: 100%; }
      .span_2_of_3 { width: 66.13%; }
      .span_1_of_3 { width: 32.26%; background-color: #fdfdfa;
      border-radius: 5%;}

      /*  GO FULL WIDTH BELOW 480 PIXELS */
      @media only screen and (max-width: 480px) {
      	.col {  margin: 1% 0 1% 0%; }
      	.span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 100%; }
      }
    </style>
    <title></title>
  </head>
  <body>
    <h2 align='center'>About Our Team</h2>

    <div class="section group">
	     <div class="col span_1_of_3" align='center'>
         <img class='circular--square' src="owner2.JPG"/>
         <h3 align="center" class='head_name'>Mr. Bishal Sunar</p>
	     </div>
	     <div class="col span_1_of_3" align='center'>
         <img class='circular--square' src="owner2.JPG"/>
         <h3 align="center" class='head_name'>Mr. Bishal Sunar</p>
	     </div>
	     <div class="col span_1_of_3" align='center'>
         <img class='circular--square' src="owner2.JPG"/>
         <h3 align="center" class='head_name'>Mr. Bishal Sunar</p>
	     </div>
     </div>

  </body>
</html>
