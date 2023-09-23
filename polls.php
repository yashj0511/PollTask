<?php
function createPoll($pollQuestion, $options = []) {
    $poll = [
        'question' => $pollQuestion,
        'options' => $options,
    ];

    return $poll;
}

// Logical Error 1: The $options array is not defined
$poll1 = createPoll("Who will win the IPL?", ["MI", "CSK"]); // Adding options for the poll

// Prompt user for their choice
echo "Enter your choice (MI or CSK): ";
$selectedOption = strtoupper(trim(fgets(STDIN))); // Read user input and convert to uppercase

// Function to view a poll
function viewPoll($poll) {
    echo "Poll Question: " . $poll['question'] . PHP_EOL;
    echo "Options: " . implode(", ", $poll['options']) . PHP_EOL;
}

// Logical Error 5: Incorrect variable name in the function call
// Corrected Error 5: Use $poll1 instead of $poll
viewPoll($poll1);

// Function to submit a poll result
function submitPollResult($poll, $selectedOption) {
    // Assume the poll results are stored in a database
    $result = [
        'question' => $poll['question'],
        'selected_option' => $selectedOption,
    ];

    return $result;
}

// Logical Error 7: Incorrect number of arguments in the function call
// Corrected Error 7: Use $selectedOption instead of $selectedOption1
$result1 = submitPollResult($poll1, $selectedOption);

// Function to view a poll result with the winner
function viewPollResult($result) {
    echo "Poll Question: " . $result['question'] . PHP_EOL;
    echo "Selected Option: " . $result['selected_option'] . PHP_EOL;
    
    // Determine the winner based on the selected option
    if ($result['selected_option'] === 'MI') {
        echo "MI wins!";
    } elseif ($result['selected_option'] === 'CSK') {
        echo "CSK wins!";
    } else {
        echo "Invalid choice. No winner selected.";
    }
}

// Logical Error 9: Incorrect variable name in the function call
// Corrected Error 9: Use $result1 instead of $result
viewPollResult($result1);
?>
