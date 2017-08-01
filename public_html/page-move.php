<?php
$sendaddresses=array();
$usableaddresses=array();
$keymyaddresses=array();
$keyusableassets=array();
$haslocked=false;
$getinfo=multichain_getinfo();
$labels=array();

if (no_displayed_error_result($getaddresses, multichain('getaddresses', true))) {

    if (no_displayed_error_result($listpermissions,
        multichain('listpermissions', 'send', implode(',', array_get_column($getaddresses, 'address')))
    ))
        $sendaddresses=array_get_column($listpermissions, 'address');

    foreach ($getaddresses as $address)
        if ($address['ismine'])
            $keymyaddresses[$address['address']]=true;

    $labels=multichain_labels();

    if (no_displayed_error_result($listpermissions, multichain('listpermissions', 'receive')))
        $receiveaddresses=array_get_column($listpermissions, 'address');

    foreach ($sendaddresses as $address) {
        if (no_displayed_error_result($allbalances, multichain('getaddressbalances', $address, 0, true))) {

            if (count($allbalances)) {
                $assetunlocked=array();

                if (no_displayed_error_result($unlockedbalances, multichain('getaddressbalances', $address, 0, false))) {
                    if (count($unlockedbalances))
                        $usableaddresses[]=$address;

                    foreach ($unlockedbalances as $balance)
                        $assetunlocked[$balance['name']]=$balance['qty'];
                }

                $label=@$labels[$address];

            }
        }
    }
}

?>
<div class="row">

    <form class="form-horizontal" method="get" enctype="multipart/form-data" action="https://transparentfuture.herokuapp.com/en/api/move">
        <div class="form-group">
            <label for="address_from" class="col-sm-3 control-label">Получатель:</label>
            <div class="col-sm-9">
                <select class="form-control" name="address_from" id="address_from">
                    <?php
                    foreach ($receiveaddresses as $address) {
                        if ($address==$getinfo['burnaddress'])
                            continue;
                        ?>
                        <option value="<?php echo html($address)?>"><?php echo format_address_html($address, @$keymyaddresses[$address], $labels)?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="hash_id" class="col-sm-3 control-label">QR код:</label>
            <div class="col-sm-9">
                <input class="form-control" name="hash_id" id="hash_id" placeholder="">
            </div>
        </div>
        <div class="form-group">
            <label for="address_to" class="col-sm-3 control-label">Получатель:</label>
            <div class="col-sm-9">
                <select class="form-control" name="address_to" id="address_to">
                    <?php
                    foreach ($receiveaddresses as $address) {
                        if ($address==$getinfo['burnaddress'])
                            continue;
                        ?>
                        <option value="<?php echo html($address)?>"><?php echo format_address_html($address, @$keymyaddresses[$address], $labels)?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <input class="btn btn-default" type="submit" name="issueasset" value="Подтвердить получение">
            </div>
        </div>
    </form>

</div>
