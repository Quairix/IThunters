var el = document.getElementById('graph'); // get canvas

var options = {
    at: el.getAttribute('data-at') || 0,
    from: el.getAttribute('data-from') || 1,
    percent: el.getAttribute('data-at') / el.getAttribute('data-from') * 100 || 0,
    size: el.getAttribute('data-size') || 110,
    lineWidth: el.getAttribute('data-line') || 2,
    rotate: el.getAttribute('data-rotate') || 0
}

var canvas = document.createElement('canvas');
var span = document.createElement('span');
span.textContent = options.at;
span.id = "span1";
if (typeof(G_vmlCanvasManager) !== 'undefined') {
    G_vmlCanvasManager.initElement(canvas);
}

var ctx = canvas.getContext('2d');
canvas.width = canvas.height = options.size;
var span2 = document.createElement('span');
span2.textContent = '/' + options.from;
span2.id = "span2";
el.appendChild(span);
el.appendChild(span2);
el.appendChild(canvas);

ctx.translate(options.size / 2, options.size / 2); // change center
ctx.rotate((-1 / 2 + options.rotate / 180) * Math.PI); // rotate -90 deg

//imd = ctx.getImageData(0, 0, 240, 240);
var radius = (options.size - options.lineWidth) / 2;

var drawCircle = function(color, lineWidth, percent) {
        percent = Math.min(Math.max(0, percent || 1), 1);
        ctx.beginPath();
        ctx.arc(0, 0, radius, 0, Math.PI * 2 * percent, false);
        ctx.strokeStyle = color;
        ctx.lineCap = 'round'; // butt, round or square
        ctx.lineWidth = lineWidth
        ctx.stroke();
};

drawCircle('#efefef', options.lineWidth, 100 / 100);
drawCircle('#1D6AFF', options.lineWidth, options.percent / 100);