<!DOCTYPE html>
<html lang="en">
<head>
<title>Optiver Volatility</title>
    <?php include '/static/head.html';?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
</head>

<body>
    <?php include '/static/header.html';?>
    <h2>Optiver Realized Volatility Prediction</h2>

    <h3>Introduction</h3>
    <p>
        This was a kaggle competition hosted by market maker Optiver.
        The goal of the competition was to predict the realized volatility of an asset over the next 10 minutes.
        The data we were given was the prior 10 minutes of the order and trade book.
        Submissions were scored on using the root mean squared percentage error.
        $$ \text{RMSPE} = \sqrt{\frac{1}{n} \sum_{i=1}^{n} ((y_i - \hat{y}_i)/y_i)^2} $$
    </p>

    <h3>Approach</h3>
    <p>
        We attempted this challenge using a machine learning algorithm in Python.
        Pandas was used to load the data which consisted of 167 million rows of data.
        We choose the Pytorch framework to create and train our model.
        Our model was a neural network with Long Short Term Memory (LSTM) layer feeding into a linear layer.
        This was all containerised using Docker.
    </p> 

    <h3>Model Methodology</h3>
    <p>
        An LSTM layer was chosen to due to Recurrent Neural Networks promise for time series forecasting.
        This was feed into a linear layer to extract the important features of our LSTM layer.
        The output of this layer was the realized volatility.

    <h3>Data-Loading</h3>
    <p>
        Files were stored as parquet files.
    </p>

    <h3>Potential Improvements</h3>
    <p>
        <ul>
            <li>Allowing the LSTM to be directional.</li>
        </ul>
    </p>
    <?php include '/static/footer.html';?>
</body>
</html>