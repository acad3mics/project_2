<!DOCTYPE html>
<html lang="en">
<?php
session_start();
/**
 * Created by PhpStorm.
 * User: beerb
 * Date: 10/11/2017
 * Time: 3:19 PM
 */
class info{
    var $shipping;
    var $firstname;
    var $lastname;
    var $address;

    var $address2;
    var $city;
    var $state;
    var $zipCode;

    var $telephone;
    var $email;
    var $firstnameB;
    var $lastnameB;

    var $addressB;
    var $address2B;
    var $cityB;
    var $stateB;

    var $zipCodeB;
    var $telephoneB;

    function info($shipping, $firstname,$lastname,  $address,
                  $address2, $city,     $state,     $zipCode,
                  $telephone,$email,    $firstnameB,$lastnameB,
                  $addressB, $address2B,$cityB,     $stateB,
                  $zipCodeB, $telephoneB)
    {
        $this->shipping=$shipping;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->address=$address;

        $this->address2=$address2;
        $this->city=$city;
        $this->state=$state;
        $this->zipCode=$zipCode;

        $this->telephone=$telephone;
        $this->email=$email;
        $this->firstnameB=$firstnameB;
        $this->lastnameB=$lastnameB;

        $this->addressB=$addressB;
        $this->address2B=$address2B;
        $this->cityB=$cityB;
        $this->stateB=$stateB;

        $this->zipCodeB=$zipCodeB;
        $this->telephoneB=$telephoneB;
    }
}
?>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Proj1Style.css">
</head>
<body style="background-color:darkgray">
    <?php
    if($_POST['Desired_Action']=="userInfoPass"){
        if(preg_match("/\.|@/",$_POST['email'])){
            $_SESSION['session_info']=new info( $_POST['shipping'],$_POST['firstName'],$_POST['lastName'],$_POST['address'],
                                                $_POST['address2'],$_POST['city'],$_POST['state'],$_POST['zipCode'],
                                                $_POST['telephone'],$_POST['email'],$_POST['firstNameB'],$_POST['lastNameB'],
                                                $_POST['addressB'],$_POST['address2B'],$_POST['cityB'],$_POST['stateB'],
                                                $_POST['zipCodeB'],$_POST['telephoneB']);
        }else{
            ?>
            <script language="javascript">
                alert("Please enter valid information.");
                window.location="userInfo.php";
            </script>
            <?php
        }
    }

    include_once('NavBar.php');
    ?>

    <form method="post" action="finalOrder.php">
        <input type="hidden" name="Desired_Action" value="userCardPass">
        <br />
        <h1>Payment Information Form</h1>
        <br />
        <br />

        <div align="center">
            <div style="width:95%;" align="left">
                <div align="center" style="background-color:whitesmoke;width:100%;">
                    <br />
                    <div align="center" style="background-color:lightgray;display:inline-block;border:3px solid darkgreen;">
                        <div style='border-bottom:darkgreen solid 2px;'>
                            <div class="row">
                            <br />
                            <br />
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <br />
                                <br />
                                <input type="text" name="name" placeholder="Name on card" />
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6" align="left">
                                <br />
                                <input type="radio" name="type" value="American Express" />American Express
                                <br />
                                <input type="radio" name="type" value="Mastercard" />Mastercard
                                <br />
                                <input type="radio" name="type" value="Visa" />Visa
                                <br />
                                <br />
                            </div>
                        </div>
                        </div>
                        <br />
                            <div style='border-bottom:darkgreen solid 2px;'>
                            <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <input type="text" name="number" placeholder="Card number" />
                                <br />
                                <br />
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <input type="text" name="date" placeholder="Expiration date" />
                            </div>
                        </div>
                            </div>
                        <br />
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn1" style="width:250px" value="Continue">
                            </div>
                        </div>
                        <br />
                    </div>
                    <br />
                    <br />
                </div>
                <br />
            </div>
        </div>
    </form>
</body>
</html>