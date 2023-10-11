<!-- View file (e.g., import_view.php) -->
<!DOCTYPE html>
<html>
<head>
    <title>Import Database</title>
</head>
<body>
    <h1>Import Database</h1>
    <?php echo form_open_multipart('Importcontroller/importdatabase'); ?>
        <input type="file" name="zip_file" accept=".zip">
        <button type="submit">Import</button>
    <?php echo form_close(); ?>
</body>
</html>
