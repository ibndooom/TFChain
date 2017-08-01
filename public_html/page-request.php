<div class="row">

    <form class="form-horizontal" method="get" enctype="multipart/form-data" action="https://transparentfuture.herokuapp.com/en/api/create">
        <div class="form-group">
            <label for="from" class="col-sm-2 control-label">Производитель:</label>
            <div class="col-sm-9">
                <select class="form-control col-sm-6" name="address" id="from">
                    <option value="1BEMQUdo9NJKqFNjgGnZCWPGm5muPRNH5mENbA"> Зaвод 1 (1BEMQUdo9NJKqFNjgGnZCWPGm5muPRNH5mENbA, local)</option>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="qty" class="col-sm-2 control-label">Название товара:</label>
            <div class="col-sm-9">
                <input class="form-control" name="name" id="name" placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label for="qty" class="col-sm-2 control-label">Количество:</label>
            <div class="col-sm-9">
                <input class="form-control" name="qty" id="qty" placeholder="1000.0" required>
            </div>
        </div>
        <div class="form-group">
            <label for="upload" class="col-sm-2 control-label">Upload file:<br><span style="font-size:75%; font-weight:normal;">Max 2047 KB</span></label>
            <div class="col-sm-9">
                <input class="form-control" type="file" name="upload" id="upload">
            </div>
            <span id="helpBlock" class="help-block">При отсутствии файла, данные будут сгенерированы</span>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-9">
                <input class="btn btn-default btn-submit" type="submit" name="issueasset" value="Отправить запрос">
            </div>
        </div>
    </form>

</div>
