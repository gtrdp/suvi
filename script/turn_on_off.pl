#! /usr/bin/perl -w

use v5.10;
use strict;
use warnings;
use Device::Plugwise;
use Data::Dumper;
use IO::File;

if ( scalar @ARGV < 2 ) {
    die "Please pass device and command as parameters";
}

my $device  = "/dev/ttyUSB0"; #stick serial port
#my $device  = $ARGV[0];
my $command = $ARGV[0]; #commandnya on/off

print "Sending $command...\n";

my $plugwise = Device::Plugwise->new( device => $device );
my $msg;

#kirim command
$plugwise->command( $command, $ARGV[1] ); #ID circle

# Ensure to process all reads
PROCESS_READS: do {
    $msg = $plugwise->read(2);
    print "Response: " . Dumper($msg) if defined $msg;
} while ( defined $msg );

__END__



#how to execute
#perl turn_on_off.pl on 290761B
