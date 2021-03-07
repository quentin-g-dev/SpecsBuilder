/**
 * Returns a string without any html tag
 * @param {String} string
 * @returns {String} 
 */
function stripTags (original) {
    return original.replace(/(<([^>]+)>)/gi, "");
}

/**
 * Puts Specs title & content in the clipboard
 * @returns {void} 
 */
function copyAsHTML() {
    var title = document.querySelector('#specsTitle').outerHTML, html = document.querySelector('#specsContent').innerHTML;
    navigator.clipboard.writeText(title+''+html);
    console.log(stripTags(html));
    return;
}

/**
 * Puts stripped Specs title & content in the clipboard
 * @returns {void} 
 */
function copyAsPlainText() {
    var title = document.querySelector('#specsTitle').outerHTML, html = document.querySelector('#specsContent').innerHTML;
    navigator.clipboard.writeText(stripTags(title+''+html));
    return;
}

/**
 * Opens a printer window and prepares specs title and text in it.
 * @returns {void} 
 */
function printSpecs() {
    var title = document.querySelector('#specsTitle').innerHTML, text = document.querySelector('#specsContent').innerHTML;    
    var printWindow = window.open('', '', 'height=400,width=800');
    printWindow.document.write(
      `<html>
        <head>
            <title>${title}</title>
        </head>
        <body>
            <h1>${title}</h1>
            <p>${text}</p>
        </body>
      </html>`
    );
    printWindow.document.close();
    printWindow.print();
    return;
}


/**
 * Puts Specs title & content in a doc file, then return an URL to download the doc file
 * @returns {string} 
 */
function docFile() {
    var title = document.querySelector('#specsTitle').innerHTML, html = document.querySelector('#specsContent').innerHTML;    
    var text = stripTags(`${title}${html}`);
    var blob = new Blob([text], {
        type: 'application/msword'
    });
    return URL.createObjectURL(blob);
}

document.querySelector('#doc > a').href=`${docFile()}`;
