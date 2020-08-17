<?php
$html = '<!DOCTYPE html>
<html lang="en">';
$head = '<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">    
    <title>OnlineShop.com</title>';
$clsHead = '</head>';
$body = '<body>';
$clsBody = '<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin = "anonymous" ></script >
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity = "sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin = "anonymous" ></script >
</body>';
$clsHtml = '</html>';
$navBar = '<nav class="navbar navbar-light bg-dark stiky-top">
        <a href="index.php" class="navbar-brand "><h4 class="text-white">ShopOnline.com</h4></a>
        <form class="form-inline">
            <button class="btn btn-outline-primary my-2 my-sm-0 mx-1" type="submit">LogIn</button>
            <button class="btn btn-outline-success my-2 my-sm-0 mx-1" type="submit">Register</button>
        </form>
        </nav>';
$itemsTableHead = '<div class="col-9">
            <table class="table">
                <thead><tr><th><p style="font-size:25pt" align="center">List of items</p></th></tr></thead>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Model</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>';
$itemsTableEnd = ' </tbody>
            </table>
        </div>
    </div>';
$twoColumsTemplate = '<div class="row row-cols-2">';

$loginForm = '<div class="col-3">
            <form class="px-4 py-3" method="POST" action="regform.php">
                <div class="form-group">
                    <label for="mail">Email address</label>
                    <input type="email" name="mail" class="form-control" id="mail" placeholder="email@example.com">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                            Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign UP</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Login in</a>
           </div>';
$clsDiv = '</div>';