<?php
$n=5;
for($i=0;$i<$n;$i++)
  echo '*';
echo '\r\n';
for($i=0;$i<$n-2;$i++){
  echo '*';
  for($j=0;$j<$n-2;$j++)
    echo ' ';
  echo '*'.'\r\n';
}
for($i=0;$i<$n;$i++)
  echo '*';
  
?>

<script>
console.log('chupame los huevos, veigar');
</script>