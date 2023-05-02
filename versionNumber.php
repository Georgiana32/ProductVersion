<?php
function productionVersion($versions) {
    $pattern = "/^(\d\.\d\.\d)-?\d+/";
    foreach ($versions as $version) {
        if (preg_match($pattern, $version, $matches)) {
            $productionVersion = $matches[0];
        }
    }
    return $productionVersion;
}
$versions = ["2.5.0-dev.1", "2.4.2-5354", "2.4.2-test.675", "2.4.1-integration.1"];
$production_version = productionVersion($versions);
echo $production_version;


