<?php
/**
 * Created by PhpStorm.
 * User: Tomas Paronai ,Dominik
 * Date: 8. 12. 2015
 * Time: 22:04
 */

include_once (ROOT.'API/UserHandler.php');

$path = '?page=private/pageSettings&settings=editUser/newUserScript';
$editUser = NULL;
if(isset($_GET['userid'])){
	$editUser = User::editUser($_GET['userid']);
	$_SESSION['editId'] = $editUser->getId();
	$path = '?page=private/pageSettings&settings=editUser/editScript';
}

// DO EDIT USER ?>
<link rel="stylesheet" href="libraries/css/editUser.css">

<form id="profile" action="<?php echo $path;?>" method="POST">

    <fieldset id="edit-profile">
        <legend>EDIT PROFILE</legend>
        <ul>
            <li>

                <input class="edit-input" type="text" name="name" value="<?php if($editUser != NULL) echo $editUser->getData('name');?>" placeholder="NAME">
            </li>

            <li>

                <input class="edit-input" type="text" name="surename" value="<?php if($editUser != NULL) echo $editUser->getData('surname');?>" placeholder="SURNAME">
            </li>

            <li>

                <input class="edit-input" type="email" name="mail" value="<?php if($editUser != NULL) echo $editUser->getData('email');?>" placeholder="EMAIL">
            </li>


            <li>

                <input class="edit-input" type="text" name="mobile" value="" placeholder="MOBILE PHONE">
            </li>

            <li>

                <input class="edit-input" type="text" name="address"value="<?php if($editUser != NULL) echo $editUser->getData('address');?>" placeholder="ADRESS">
            </li>

            <li>

                <input class="edit-input"  type="text" name="city"  value="<?php if($editUser != NULL) echo $editUser->getData('city');?>" placeholder="CITY">
            </li>

            <li>

                <input class="edit-input" type="text" name="postcode" value="<?php if($editUser != NULL) echo $editUser->getData('postcode');?>" placeholder="POSTCODE">
            </li>

            <li>
                <input id="edit-profile-submit" type="submit" value="SAVE CHANGE">
            </li>
        </ul>
    </fieldset>
</form>
