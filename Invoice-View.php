<?php
session_start();
include("config/config.php");

$id=$_POST['view-invoice'];

$sql="SELECT * from invoice WHERE ID='$id'";
$result=mysqli_query($conn,$sql);
if($result==true)
{
$row=mysqli_fetch_array($result);
$amount=$row['Amount'];
$address=$row['Address'];
$product=$row['Product'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
<style>
@keyframes gradientAnimation {
    0% {
        background: linear-gradient(45deg, #4d9af3, #ff9900, #4adb4a, #3399ff, #cc66ff);
        background-size: 600% 100%;
        background-position: 0% 100%;
    }
    100% {
        background: linear-gradient(45deg, #cc66ff, #3399ff, #5ce25c, #ff9900);
        background-size: 600% 100%;
        background-position: 100% 0%;
    }
}

.bg-gradient-animation {
    animation: gradientAnimation 10s linear infinite;
}


</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<script src="https://cdn.tailwindcss.com"></script>

<?php include 'Header.php';?>
<section>
    <div class="flex flex-row">
        <div class="w-1/4">
            <?php include('Sidebar.php');?>
        </div>
        <div class="w-2/3">

        <h1 class="font-semibold text-center text-2xl my-5">Download Invoice</h1>
        <button class="middle  none center mr-4 rounded-lg bg-blue-500 my-5 py-3
         px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg         
         hover:shadow-blue-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 
         disabled:shadow-none"
  data-ripple-light="true" id="printButton">Download PDF</button>
        
        <div class="bg-white border rounded-lg shadow-lg px-6 py-8 max-w-md mx-auto mt-8" id="contentToPrint">
    <h1 class="font-bold text-2xl my-4 text-center text-blue-600">GLA Services</h1>
    <hr class="mb-2">
    <div class="flex justify-between mb-6">
        <h1 class="text-lg font-bold">Invoice</h1>
        <div class="text-gray-700">
            <div>Date: <?php echo $row['Date'];?></div>
            <div>Invoice #: INV<?php echo $row['ID'];?></div>
        </div>
    </div>
    <div class="mb-8">
        <h2 class="text-lg font-bold mb-4">Bill To:</h2>
        <div class="text-gray-700 mb-2"><?php echo $row['Name'];?></div>
        <div class="text-gray-700 mb-2"><?php echo $address;?></div>
        
        <div class="text-gray-700"><?php echo $row['Email'];?></div>
    </div>
    <table class="w-full mb-8">
        <thead>
            <tr>
                <th class="text-left font-bold text-gray-700">Description</th>
                <th class="text-right font-bold text-gray-700"><?php echo $amount;?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-left text-gray-700"><?php echo $product;?></td>
                <td class="text-right text-gray-700">$<?php echo $amount;?></td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <td class="text-left font-bold text-gray-700">Total</td>
                <td class="text-right font-bold text-gray-700">$<?php echo $amount;?></td>
            </tr>
        </tfoot>
    </table>
    <div class="text-gray-700 mb-2">Thank you for your business!</div>
    <div class="text-gray-700 text-sm">Please remit payment within 30 days.</div>
</div>
        





        </div>
    </div>
</section>
<script>
// Get the print button element
document.getElementById("printButton").addEventListener("click", function () {
    var contentToPrint = document.getElementById("contentToPrint");
    var printWindow = window.open("", "", "width=600,height=600");
    printWindow.document.open();
    printWindow.document.write('<html><head><title>Print</title></head><body>');
    printWindow.document.write(contentToPrint.innerHTML);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
    printWindow.close();
});

</script>



<?php include 'footer.php';?>
</body>
</html>