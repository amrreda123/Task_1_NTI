<?php
$errors = [];
$total = 0;
$discount_amount = 0;
$final_price = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];

    // 1. فحص هل المدخلات أرقام
    if (!is_numeric($product_price) || !is_numeric($product_quantity)) {
        $errors['num'] = "لازم تدخل أرقام صحيحة";
    } 
    // 2. فحص الأرقام السالبة (لو هي أرقام أصلاً)
    elseif ($product_price < 0 || $product_quantity < 0) {
        $errors['nav'] = "مينفعش السعر أو الكمية تكون بالسالب";
    }

    // 3. لو مفيش أخطاء.. ابدأ الحساب
    if (empty($errors)) {
        $total = $product_price * $product_quantity;
        
        // تحديد نسبة الخصم
        $discount_rate = ($total < 1000) ? 0.10 : 0.15;
        
        $discount_amount = $total * $discount_rate;
        $final_price = $total - $discount_amount;
    }
}
?>

<form action="" method="POST">
    <div>
        <label>سعر المنتج:</label>
        <input type="text" name="product_price" value="<?php echo $_POST['product_price'] ?? '' ?>">
        <p style="color:red;"><?php echo $errors['num'] ?? '' ?></p>
    </div>

    <div>
        <label>عدد القطع:</label>
        <input type="text" name="product_quantity" value="<?php echo $_POST['product_quantity'] ?? '' ?>">
        <p style="color:red;"><?php echo $errors['nav'] ?? '' ?></p>
    </div>

    <button type="submit" name="submit">احسب الفاتورة</button>
</form>

<?php if (isset($final_price) && $final_price > 0): ?>
    <hr>
    <h4>تفاصيل الفاتورة:</h4>
    <p>السعر قبل الخصم: <?php echo $total ?> ج.م</p>
    <p>قيمة الخصم: <?php echo $discount_amount ?> ج.م</p>
    <p><strong>السعر النهائي: <?php echo $final_price ?> ج.م</strong></p>
<?php endif; ?>