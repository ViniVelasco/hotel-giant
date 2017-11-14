<div class="page-wrapper">
    <div class="bs-example4">
        <p class="alert-success hide" id="confirmacao"></p>
        <p class="alert-info hide" id="erro"></p>
        <form action="" method="post" enctype="multipart/form-data" id="formAddEvent">
            <div class="form-group">
                <label for="event_name">Event Name</label>
                <input type="text" class="form-control1 control3" name="event_name" required>
            </div>

            <div class="form-group">
                <label for="event_description">Event Description</label>
                <textarea class="form-control1 text-area" cols="50" rows="5" name="event_description"></textarea>
            </div>

            <div class="form-group">
                <label for="restaurant_image">Event Image</label>
                <input type="file" name="event_image" required>
            </div>

            <div class="form-group">
                <label for="event_capacity">Event Capacity</label>
                <input type="number" class="form-control1 control3" name="event_capacity" required>
            </div>

            <div class="form-group">
                <label for="event_price">Event Price</label>
                <input type="text" class="form-control1 control3" name="event_price" required>
            </div>

            <div class="form-group">
                <label for="event_date">Event Date</label>
                <input type="date" class="form-control1 control3" name="event_date" required>
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="create_event" value="Create Event"
                       required>
            </div>

        </form>
    </div>
    <!-- cdn for modernizr, if you haven't included it already -->
    <script src="js/modernizr"></script>
    <!-- polyfiller file to detect and load polyfills -->
    <script src="js/webshim-1.16.0/js-webshim/minified/polyfiller.js"></script>
    <script>
        webshims.setOptions('waitReady', false);
        webshims.setOptions('forms-ext', {types: 'date'});
        webshims.polyfill('forms forms-ext');
    </script>

</div>
    <script src="js/controller/add_event_controller"></script>
