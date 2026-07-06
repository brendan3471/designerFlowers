<?php

$dir = __DIR__ . '/dist';

if (!is_dir($dir)) {
    echo "Dist directory not found.\n";
    exit(1);
}

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'html') {
        $content = file_get_contents($file->getPathname());
        
        // Replace http://localhost/ and http://localhost with /
        $content = str_replace(
            ['http://localhost/', 'http://localhost'],
            ['/', '/'],
            $content
        );
        
        file_put_contents($file->getPathname(), $content);
        echo "Cleaned URLs in: " . $file->getFilename() . "\n";
    }
}
echo "Static site URL cleaning completed successfully!\n";
