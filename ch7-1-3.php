<H1>SID: C112181118</H1>
<BR>
NAME: Song1211-030
<P>

<?php
// Array of scores
$scores = array(22, 16, 30, 24);

// Initialize total to 0
$total = 0;

// Iterate over each score in the array and add it to the total
foreach ($scores as $score) {
    echo "$score "; // Output each score
    $total += $score; // Add the score to total
}

// Output the total sum
echo "<BR>Total: " . $total . "<BR>";

// Print the array of scores
print_r($scores);
?>
