document.getElementById("transferForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Get form inputs
    var sender = document.getElementById("sender").value;
    var recipient = document.getElementById("recipient").value;
    var amount = parseInt(document.getElementById("amount").value);

    // Check if sender and recipient exist
    var validSenders = ["Alice", "Bob", "John", "Jack"];
    var validRecipients = ["Alice", "Bob", "John", "Jack"];
    if (!validSenders.includes(sender) || !validRecipients.includes(recipient)) {
        document.getElementById("result").innerHTML = "Invalid sender or recipient.";
        return;
    }

    // Check if the sender has sufficient balance
    var senderBalance = getAccountBalance(sender);
    if (senderBalance < amount) {
        document.getElementById("result").innerHTML = "Insufficient balance.";
        return;
    }

    // Perform the transfer
    updateAccountBalance(sender, senderBalance - amount);
    updateAccountBalance(recipient, getAccountBalance(recipient) + amount);

    // Display the updated account balances (with the flaw)
    document.getElementById("result").innerHTML = "Money Transfer Successful<br>"
        + "Sender (" + sender + ") new balance: $" + (senderBalance - amount) + "<br>"
        + "Recipient (" + recipient + ") new balance: $" + (getAccountBalance(recipient) + amount);
});

function getAccountBalance(account) {
    // Simulating a server request to retrieve the account balance
    var balances = {
        "John": 5000,
        "Bob": 10000,
        "Jack": 7500,
        "Alice": 2000
    };

    return balances[account];
}

function updateAccountBalance(account, newBalance) {
    // Simulating a server request to update the account balance
    // In this flawed version, the balance is not actually updated
    // and the flaw allows money to be created in the sender's account.
}
