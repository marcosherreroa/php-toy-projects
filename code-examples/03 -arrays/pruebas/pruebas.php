<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <pre><?php
  //$emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";
  $emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

  $split1 = explode("\n\nQuote of the Month:\n\n",$emailContent);
$split2 = explode("\n\n",$split1[1]);
$split3 = explode (": ",$split2[0]);
$author = $split3[0];
$quote = $split3[1];

$newQuoteFormat = "{$quote} - {$author}";

$impl1 = implode("\n\n", [$newQuoteFormat,...array_slice($split2,1)]);
  $modifiedEmailContent = implode("\n\nQuote of the Month\n\n",[$split1[0],$impl1]);
  ?></pre>
</body>
</html>