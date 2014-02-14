<?php require_once 'inc/header.inc.php'; ?>
<?php $user = $_SESSION['user']; ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo __('invoices.last50'); ?></h3>
    </div>
    <table class="table">
        <tr>
            <th><?php echo __('invoices.number'); ?></th>
            <th><?php echo __('invoices.date'); ?></th>
            <th><?php echo __('invoices.amount'); ?></th>
            <th><?php echo __('invoices.duedate'); ?></th>
            <th><?php echo __('invoices.due'); ?></th>
        </tr>
        <?php
        $due = 0;

        $data = getData($domain.'invoices?client='.$clients[$user]['client']);
        $data = simplexml_load_string($data);

        foreach ($data as $invoice)
        {
            $due += (float)$invoice->{'due-amount'};
            echo '<tr>
                <td><a href="'.$domain.'/client/invoices/'.$invoice->{'client-key'}.'" target="_blank">' . $invoice->{'number'} . '</a></td>
                <td>' . $invoice->{'issued-at'} . '</td>
                <td class="hours">' . number_format((float)$invoice->amount, 2) . '</td>
                <td>' . $invoice->{'due-at'} . '</td>
                <td class="hours">' . number_format((float)$invoice->{'due-amount'}, 2) . '</td>
            </tr>';
        }
        echo '<tr>
            <td colspan="4">&nbsp;</td>
            <td class="hours"><strong>' . number_format($due, 2  ) . '</strong></td>
        </tr>';
        ?>
    </table>
</div>

<?php require_once 'inc/footer.inc.php'; ?>