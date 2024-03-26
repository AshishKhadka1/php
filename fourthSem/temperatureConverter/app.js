function convertTemperature() {
    // Retrieve input values
    var temperature = document.getElementById('temperature').value;
    var unit = document.querySelector('input[name="unit"]:checked').value;
    var convertUnit = document.querySelector('input[name="convert-unit"]:checked').value;

    // Send AJAX request to PHP script
    fetch('./php/table.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            temperature: temperature,
            unit: unit,
            'convert-unit': convertUnit
        }),
    })
    .then(response => response.json())
    .then(data => {
        // Display converted temperature
        document.getElementById('converted_temperature').innerText = 'Converted Temperature: ' + data.convertedTemperature;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
