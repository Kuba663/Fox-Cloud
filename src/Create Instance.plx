my $textinput = <STDIN>;
my $instancename = $textinput;
my $instancedir = mkdir $instancename, 0755 or die "Nie można utworzyć $instancename: $!";

