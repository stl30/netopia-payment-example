fresh laravel 6 copy with netopia payment package and  routes for  operations

installation 
1. copy repository to your xamp/lamp folder 
2. run composer update 
3.complete in card-redirect.blade.php file your data
    - $x509FilePath 	= '/YOUR_SERVER/PATH/TO/YOUR/certificates/sandbox.XXXX-XXXX-XXXX-XXXX-XXXX.public.cer'; <br>
    // this is the path on your server to the public certificate. You may download this from Admin -> Conturi de comerciant -> Detalii -> Setari securitate<br>
    - $objPmReqCard->signature 			= 'YN8Q-RH4J-39C1-FPAG-2P8A';<br>
    //merchant account signature - generated by mobilpay.ro for every merchant account<br>
    - $objPmReqCard->returnUrl 			= 'http://yourdomain.com/cardReturn.php';<br>
    //url where mobilPay redirects the client once the payment process is finished. Not to be mistaken for a "successURL" nor "cancelURL"; mandatory<br>
    <br>
    after you these setting you should be able to  enter payment data, generate payment details for netopia , make a payment and be redirected to return url<br>
    
    

availabla routes<br>
1.your_server_url/netopia/start -> form for payment details<br>
2.your_server_url/netopia/card-redirect -> redirect page with payment details<br>


