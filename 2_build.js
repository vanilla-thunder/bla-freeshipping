var fs = require('fs'),
    r = require("request"),
    replace = require('replace'),
    runner = require('child_process');


var shell = function (command) {
    runner.exec(command,
        function (err, stdout, stderr) {
            //if (err) console.log(err);
            //if (stderr) console.log(stderr);
        }
    );
};

var version = process.argv[2];
if (!version) {
    console.log('hallo bitte!!! Version???')
    process.exit(9);
}

// cleanup
shell("rm -rf _module/application");
shell("rm -rf _module/extend");
shell("rm -rf _master/copy_this/modules/bla/*");
console.log("");
console.log("     cleanup finished");

// oxversion
r('http://mb-dev.de/v/?raw=1&v=' + version).pipe(fs.createWriteStream('_module/version.jpg'));

// copy files
shell("cp -r application _module/application");
shell("cp -r extend _module/extend");
shell("cp metadata.php _module/metadata.php");
shell("cp README.md _module/README.md");
shell("cp LICENSE _module/LICENSE");
console.log("     new files copied");

// compile some files
var module = '"VSK-frei ab ... EUR" Hinweis für OXID eShop',
    company = 'bestlife AG',
    email = 'oxid@bestlife.ag',
    year = '2016';

replace({
    regex: "###_MODULE_###",
    replacement: module,
    paths: ['./_module'],
    recursive: true,
    silent: true
});
replace({
    regex: "###_VERSION_###",
    replacement: version,
    paths: ['./_module'],
    recursive: true,
    silent: true
});
replace({
    regex: "###_COMPANY_###",
    replacement: company,
    paths: ['./_module'],
    recursive: true,
    silent: true
});
replace({
    regex: "###_EMAIL_###",
    replacement: email,
    paths: ['./_module'],
    recursive: true,
    silent: true
});
replace({
    regex: "###_YEAR_###",
    replacement: year,
    paths: ['./_module'],
    recursive: true,
    silent: true
});

process.on('exit', function (code) {
    console.log("     replacing complete");
    // copy module to master
    shell("cp -r _module _master/copy_this/modules/bla/bla-vskfreiab");
    shell("rm -rf _master/copy_this/modules/bla/bla-vskfreiab/.git");
    shell("cp _module/README.md _master/README.md");
    console.log("");
    console.log("     build complete! made my day!");
    console.log("");
});