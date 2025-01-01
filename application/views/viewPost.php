<h3>Post data</h3>
<p>Data is usually posted from froms. You can use a form method 'post' to post the data.
Or you can use the JavaScript request to post data.</p>
<p>The framework uses one function to handle both.</p>

<h4>Post using form method</h4>
<p>The following form can be posted using the form method 'post'.</p>
<p>The data is collected using the global '$_POST'.</p>
<form method="post" action="{LINK_ROOT}{REQUEST_URI}">
<p>Data field 1:</p>
<p><input type="text" name="field1" /></p>
<p>Data field 2:</p>
<p><input type="text" name="field2" /></p>
<p><button type="submit">Submit</button></p>
</form>


<h4>Post using JS</h4>
<p>The following data is posted as JSON using a JS request.</p>
<p>The data is collected by reading from 'php://input'.</p>
<p>Data field 1:</p>
<p><input type="text" id="field1" /></p>
<p>Data field 2:</p>
<p><input type="text" id="field2" /></p>
<p><button type="button" onclick="postData()">Submit</button></p>

<h4>Posted data</h4>
<div id="posted-data">
<?php use framework as F;
F\debug($this->pageData["posted_data"]);
?>
</div>
<script>

'use strict';

function postData()
{
    let data = {}
    data.field1 = document.getElementById('field1').value.trim();
    data.field2 = document.getElementById('field2').value.trim();

    let request = new Request('{LINK_ROOT}post-js', {
        method: 'post',
        body: JSON.stringify(data),
    });

    fetch (request)
        .then ((response) => {
            if (response.status === 200)
            {
                return response.text();
            }
            else
            {
                throw new Error('invalid response status: ' + response.status);
            }
        })
        .then ((text) => {
            showResult(text);
        })
        .catch ((error) => {
            showResult(error.message);
        });
}

function showResult(result)
{
    result = result
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    document.getElementById('posted-data').innerHTML = '<pre>' + result + '</pre>';
}

</script>
