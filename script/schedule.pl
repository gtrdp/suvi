#! /usr/bin/perl -w

## How to use
#	sudo perl /path/to/schedule.pl <address> <delay in second>
#	
#	example
#	sudo perl /path/to/schedule.pl 29C5129 600

use v5.10;
use strict;
use warnings;
use Device::Plugwise;
use Data::Dumper;
use IO::File;
use Time::HiRes;

if ( scalar @ARGV < 2 ) {
    die "Please pass device and command as parameters";
}

my $device  = "/dev/ttyUSB0"; #stick serial port
#my $device  = $ARGV[0];
my $command1 = "on"; #commandnya on
my $command2 = "off"; #commandnya off

my $plugwise = Device::Plugwise->new( device => $device );
my $msg;

#kirim command2
$plugwise->command( $command1, $ARGV[0]); #ID circle

# Ensure to process all reads
PROCESS_READS: do {
    $msg = $plugwise->read(2);
    print "Response: " . Dumper($msg) if defined $msg;
} while ( defined $msg );

#Sleep
Time::HiRes::sleep($ARGV[1]);

#kirim command2
$plugwise->command( $command2, $ARGV[0]); #ID circle

# Ensure to process all reads
PROCESS_READS: do {
    $msg = $plugwise->read(2);
    print "Response: " . Dumper($msg) if defined $msg;
} while ( defined $msg );

__END__



#how to execute
#perl turn_on_off.pl on 290761B
