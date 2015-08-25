<div id="content">
    <div class="row">
        <form method="post" action="/request/simulation" role="form">
            <div class="form-group">
                <input type="number" class="form-control" name="value">
                <select class="form-control" name="installments">
                    <?php foreach ($installments_options as $key => $value) {
                        echo "<option value='$value'>$value</option>";
                    }?>
                </select>      
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>   
    </div>  
</div>
