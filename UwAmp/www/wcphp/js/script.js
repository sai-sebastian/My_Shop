document.getElementById('selectOption').addEventListener('change', function() {
    // Get the selected value
    var selectedValue = this.value;

    // Make an AJAX request to update.php
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'update_basket.php?selectedValue=' + selectedValue, true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            // Display the result in the 'result' div
            document.getElementById('result').innerHTML = xhr.responseText;
        }
    };

    xhr.send();
});
