#!/bin/bash
PROJECT_DIR=$(readlink -f $(dirname $0))
for i in `find $PROJECT_DIR/test/resource/ -type f -name '*.wsdl'`; do
  BASE="${i%%`basename $i`}generated"
  rm -Rf $BASE/singlefile/*
  rm -Rf $BASE/psr-0/*
  rm -Rf $BASE/psr-2/*
  rm -Rf $BASE/subnamespaces/*
  rm -Rf $BASE/psr-4/*
  rm -Rf $BASE/HnStyle/*
  mkdir -p $BASE/singlefile/ $BASE/psr-0/ $BASE/psr-2/ $BASE/subnamespaces/ $BASE/psr-4/ $BASE/HnStyle
  php $PROJECT_DIR/src/bin/wsdl2php.php -i $i -o $BASE/singlefile/
  php $PROJECT_DIR/src/bin/wsdl2php.php -i $i -o $BASE/psr-0/ -n 'Controle'
  php $PROJECT_DIR/src/bin/wsdl2php.php -i $i -o $BASE/psr-2/ -t -n'Controle'
  php $PROJECT_DIR/src/bin/wsdl2php.php -i $i -o $BASE/subnamespaces/ -n 'Controle' -g 'sub1\sub2'
  php $PROJECT_DIR/src/bin/wsdl2php.php -i $i -o $BASE/psr-4/ -n 'Controle\Hostnet\Namesp' -g 'Sub4\Complex' -4
  php $PROJECT_DIR/src/bin/wsdl2php.php -i $i -o $BASE/HnStyle/ -v -n 'Controle\Hostnet\Namesp' -g 'Sub4\Complex' -4
done

