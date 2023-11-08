<!DOCTYPE html>
<html>
<head>
    <title>CRUD Ajax</title>
</head>
<body>
    <h1>CRUD Example</h1>
    
    <!-- Display form for creating and updating items -->
    <form id="item-form">
        <input type="hidden" id="item-id" name="item-id">
        <input type="text" id="item-name" name="item-name" placeholder="Item Name" required>
        <input type="text" id="item-description" name="item-description" placeholder="Item Description" required>
        <input type="number" id="item-price" name="item-price" placeholder="Item Price" required>
        <button type="submit" id="save-button">Save</button>
    </form>

    <!-- Display the list of items -->
    <div id="item-list">
        <!-- Data will be loaded via AJAX -->
    </div>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Include JavaScript for AJAX requests -->
    <script src="js/ajax.js"></script>
</body>
</html>
