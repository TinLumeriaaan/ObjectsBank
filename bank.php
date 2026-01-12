<?php
include 'classes/Account.php';
include 'classes/Customer.php';

$my_list = [
    new Account('1618', 'Checking', -1350),
    new Account('1920', 'Savings', 380),
    new Account('1418', 'Business', -6500),
    new Account('1606', 'Emergency', 500)
];

$person = new Customer('Christine', 'Dantes', $my_list);

$total_bal = 0;
foreach ($person->user_acts as $item) {
    $total_bal = $total_bal + $item->bal;
}

include 'includes/header.php'; 
?>

<div class="summary-container">
    <h2 class="summary-title">Account Summary</h2>
    <div class="summary-details">
        <p>Total Balance: ₱ <?php echo number_format($total_bal, 2); ?></p>
        <p>Accounts: <?php echo count($person->user_acts); ?></p>
    </div>
</div>

<h1>NAME: <?php echo $person->getFullName(); ?></h1>

<table>
    <thead>
        <tr>
            <th>ACCOUNT NUMBER</th>
            <th>ACCOUNT TYPE</th>
            <th>BALANCE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($person->user_acts as $row) { ?>
            <tr>
                <td><?php echo $row->num; ?></td>
                <td><?php echo $row->cat; ?></td>
                
                <?php 
                if ($row->bal >= 0) {
                    $color_class = 'important';
                } else {
                    $color_class = 'overdrawn';
                }
                ?>
                <td class="<?php echo $color_class; ?>">
                    ₱ <?php echo number_format($row->bal, 2); ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php include 'includes/footer.php'; ?>