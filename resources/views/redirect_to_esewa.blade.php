<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting to eSewa...</title>
</head>

<body onload="document.getElementById('esewa-form').submit();">
    <p>Redirecting to eSewa, please wait...</p>
    <form action="https://rc-epay.esewa.com.np/api/epay/main/v2/form"  method="POST" name="esewa-form" id="esewa-form">
        <input type="text" id="amount" name="amount" value="{{ $esewaData['amt'] }}" required hidden>
        <input type="text" id="tax_amount" name="tax_amount" value ="10" required hidden>
        <input type="text" id="total_amount" name="total_amount" value="{{ $esewaData['amt']+10 }}" required hidden>
        <input type="text" id="transaction_uuid" name="transaction_uuid" value="{{ $esewaData['uuid'] }}" required hidden>
        <input type="text" id="product_code" name="product_code" value ="EPAYTEST" required hidden>
        <input type="text" id="product_service_charge" name="product_service_charge" value="0" required hidden>
        <input type="text" id="product_delivery_charge" name="product_delivery_charge" value="0" required hidden>
        <input type="text" id="success_url" name="success_url" value="http://localhost:8000/history?result=success" required hidden>
        <input type="text" id="failure_url" name="failure_url" value="http://localhost:8000/history?result=fail" required hidden>
        <input type="text" id="signed_field_names" name="signed_field_names"
            value="total_amount,transaction_uuid,product_code" required hidden>
        <input type="text" id="signature" name="signature" value="{{ $esewaData['signature'] }}"
            required hidden>
        <input value="Click here to redirect" type="submit" >
    </form>
    <script>
        // redirect to eSewa automatically
        // document.forms['esewa-form'].submit();
    </script>
</body>

</html>
