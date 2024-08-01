<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question2</title>
    <style>
        form {
            background-color: aliceblue;
            padding: 20px;
            margin: 0 auto;
            width: 500px;
            border-radius: 10px;
            text-align: left;
            font-family: Arial, sans-serif;
        }

        button {
            background-color: blueviolet;
            color: white;
            font-size: medium;
            padding: 10px 30px;
            border: black;
            border-radius: 25px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend><h3>Manage Your Bank Account</h3></legend>
        <label for="accountNumber">Account Number:</label>
        <input type="text" id="accountNumber" name="accountNumber" required><br><br>
        
        <label for="initialBalance">Initial Balance:</label>
        <input type="number" id="initialBalance" name="initialBalance" required><br><br>
        
        <label for="action">Action:</label>
        <select id="action" name="action" required>
            <option value="credit">Credit</option>
            <option value="debit">Debit</option>
            <option value="transfer">Transfer</option>
        </select><br><br>
        
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required><br><br>
        
        <label for="targetAccount">Target Account (for transfer):</label>
        <input type="text" id="targetAccount" name="targetAccount"><br><br>
        
        <button type="submit " value="Submit"> Submit</button>
        <br><hr><br>
    

    <?php
    class Account {
        private $accountNumber;
        private $balance;

        public function __construct($accountNumber, $initialBalance = 0) {
            $this->accountNumber = $accountNumber;
            $this->balance = $initialBalance;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function credit($amount) {
            if ($amount > 0) {
                $this->balance += $amount;
            }
        }

        public function debit($amount) {
            if ($amount > 0 && $amount <= $this->balance) {
                $this->balance -= $amount;
            } else {
                echo "Insufficient balance.";
            }
        }

        public function transferTo($anotherAccount, $amount) {
            if ($amount > 0 && $amount <= $this->balance) {
                $this->debit($amount);
                $anotherAccount->credit($amount);
            } else {
                echo "Transfer failed due to insufficient balance.";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $accountNumber = $_POST['accountNumber'];
        $initialBalance = $_POST['initialBalance'];
        $action = $_POST['action'];
        $amount = $_POST['amount'];
        $targetAccountNumber = $_POST['targetAccount'];

        
        $account = new Account($accountNumber, $initialBalance);

        if ($action == "credit") {
            $account->credit($amount);
            echo "New balance after credit: " . $account->getBalance();
        } elseif ($action == "debit") {
            $account->debit($amount);
            echo "New balance after debit: " . $account->getBalance();
        } elseif ($action == "transfer") {
            if (!empty($targetAccountNumber)) {
                $targetAccount = new Account($targetAccountNumber);
                $account->transferTo($targetAccount, $amount);
                echo "New balance after transfer: " . $account->getBalance();
                echo "<br>Target account new balance: " . $targetAccount->getBalance();
            } else {
                echo "Target account number is required for transfer.";
            }
        }
    }
    ?>
        </fieldset>
    </form>
</body>
</html>
