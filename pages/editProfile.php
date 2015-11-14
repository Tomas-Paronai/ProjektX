<!doctype html>
<html lang="">
<head>

    <title>edit-profile</title>
    <style>

    fieldset{
        margin-top: 50px;
        margin-left: 20px;
    width: 200px;
    border: solid 1px;
    border-color: black;
    background-color: rgba(156, 165, 162, 0.33);

    }
    fieldset legend{
    color: white;
        background-color: #5E6361;
    padding: 0 64px 0 2px;
    }

    fieldset ul{
    list-style: none;
    padding: 0;
    margin: 2px;
    }

    fieldset ul li{
    margin: 0 0 9px 0;
    padding: 0;
    }

    fieldset input{
    display: block;
    }

    input{
        width: 200px;
        background-color: ;
        border: solid 1px;
    }

    input[type=submit]{
        background-color: #5E6361;
        color: white;
        border:none;

        -moz-border-radius:10px; /* Firefox */
        -webkit-border-radius: 10px; /* Safari, Chrome */
        -khtml-border-radius: 10px; /* KHTML */
        border-radius: 10px; /* CSS3 */
        behavior:url("border-radius.htc");
    }


        input :last-child{
            border: none;
        }
    label{
        color: black;
        font-weight: bold;
    }


    </style>

</head>

<body id="body">


<form id="profile" action="/edit" method="get">
    <fieldset id="edit-profile">
        <legend>Edit profile</legend>
        <ul>
            <li>
                <label for="name">Name</label>
                <input id="name" type="text" name="name">
            </li>

            <li>
                <label for="surename">Surename</label>
                <input id="surename" type="text" name="surename">
            </li>

            <li>
                <label for="name">E-mail</label>
                <input id="e-mail" type="email" name="e-mail">
            </li>

            <li>
                <label for="name">Password-original</label>
                <input id="password-original" type="text" name="password-original">
            </li>

            <li>
                <label for="name">Password-new</label>
                <input id="password-new" type="text" name="password-new">
            </li>

            <li>
                <label for="name">Phone number</label>
                <input id="mobile-num" type="text" name="mobile-num">
            </li>

            <li>
                <label for="name">Address</label>
                <input id="address" type="text" name="address">
            </li>

            <li>
                <label for="name">City</label>
                <input id="city" type="text" name="city">
            </li>

            <li>
                <label for="name">Post code</label>
                <input id="postcode" type="text" name="postcode">
            </li>

            <li>
                <input  type="submit" value="save-change">
            </li>
        </ul>
    </fieldset>
</form>
</body>
</html>
