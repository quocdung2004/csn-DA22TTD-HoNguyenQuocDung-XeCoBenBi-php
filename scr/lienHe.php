<?php
include "header_index.php";
include "connnect.php";
include "copy_productClass.php";
?>
<?php
$product = new product;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $insert_lienhe = $product->insert_lienhe($_POST);
}
?>
<style>
    .form-container {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #333;
        width: 100%;
        max-width: 600px;
        margin: auto;
        font-size: 1.6rem;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-container .form-group {
        margin-bottom: 15px;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
    }

    .form-container input,
    .form-container textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-container input:focus,
    .form-container textarea:focus {
        border-color: #007bff;
        outline: none;
    }

    .form-container .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #0056b3;
    }
</style>
<div class="grid" style="margin: 20px auto;">
    <div class="form-container">
        <h2>Contact Us</h2>
        <form id="contactForm" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="tenlh" required>
                <div class="error" id="nameError"></div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="emaillh" required>
                <div class="error" id="emailError"></div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="noidung" rows="4" required></textarea>
                <div class="error" id="messageError"></div>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>