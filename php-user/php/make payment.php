<?php 
$page1 = "makepayment.php";
include 'php includes/header.php';
include 'php includes/parsebill.php';
include 'php includes/parseMyprofile.php';

?>
        <div class="container text-center make-payment-box">
        <?php if(!isset($_SESSION['meterid'])): ?>
            <h3 class="text-center help-section1">You are not authorized to view this page <a href="signin.php">Login</a> Not yet a member? <a href="sing up.php">Sign up"</a></h3>
            <?php else: ?>
              <div class="transaction-history-btn">
                <a class="btn btn-primary mb-3 text-left" href="transaction history.php">Transaction History</a>
              </div>
          <div class="make-payment-content d-flex justify-content-center">
            <div class="col-12 col-md-6">
             
              <div class="make-payment-box mb-5">
                <h6 class="account-details-header">ENTER YOUR ACCOUNT DETAILS</h6>
                
                <form class="form-box" id="paymentForm">
                  <div class="radio-button-choice mt-5 mb-5">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input radio-button" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
                      <label class="form-check-label" for="flexRadioDefault1">
                        <strong>Prepaid</strong>
                      </label>
                    </div>
                    
                  
                  <div class="row g-3 justify-content-center align-items-center align-them">
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="email" id="email-address" class="form-control" placeholder="Meter Number" id="floatingInput" required>
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" id="first-name" class="form-control" placeholder="Payer's First Name" value="<?php if(isset($name)) echo $firstname; ?>">
                      <label for="floatingInput">Payer's First Name</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" id="last-name" class="form-control" placeholder="Payer's last Name" value = "<?php if(isset($name)) echo $lastname; ?>">
                      <label for="floatingInput">Payer's last Name</label>
                    </div>
                    
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" class="form-control" placeholder="Phone number" >
                      <label for="floatingInput">Phone number</label>
                    </div>
                    <div class="form-floating col-sm-12 col-md-6 mb-3">
                      <input type="text" id="amount" class="form-control" placeholder="Amount" value="<?php while ($rs = $stmt1->fetch(PDO::FETCH_ASSOC)){ if ($rs['active_bill'] == "1"){ echo $rs['bill_price'];} else{ echo "Bill fulfilled";}} ?>" required disabled>
                      <label for="floatingInput">Amount</label>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-3 form-submit">
                      <button type="submit" id="submit" class="btn btn-lg btn-primary" onclick="payWithPaystack()">Pay</button>
                    </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
         <!-- paystack integration -->
  
  

         <script src="https://js.paystack.co/v1/inline.js"></script> 
       
              <script>
                  const paymentForm = document.getElementById('paymentForm');
                  paymentForm.addEventListener("submit", payWithPaystack, false);
                  function payWithPaystack(e) {
                    e.preventDefault();
                    let handler = PaystackPop.setup({
                      key: 'pk_test_32e0bc2432bb45ec099e3885b9f3fd963c93020f', // Replace with your public key
                      email: document.getElementById("email-address").value,
                      amount: document.getElementById("amount").value * 100,
                      ref: 'AEE-'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                      // label: "Optional string that replaces customer email"
                      onClose: function(){
                        window.location = "http://localhost/works/1project/php/make payment.php";
                        alert('Transaction Cancelled.');
                      },
                      callback: function(response){
                        let message = 'Payment complete! Reference: ' + response.reference;
                        alert(message);
                        window.location = "http://localhost/works/1project/php-user/php/verify_transaction.php?reference=" + response.reference;
                      }
                    });
                    handler.openIframe();
                  }
                </script>
    

        <?php include 'php includes/footer.php';?>
        <?php endif ?>