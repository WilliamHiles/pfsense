<?php
/*
	license.php
*/
/* ====================================================================
 *	Copyright (c)  2004-2015  Electric Sheep Fencing, LLC. All rights reserved.
 *
 *	Redistribution and use in source and binary forms, with or without modification,
 *	are permitted provided that the following conditions are met:
 *
 *	1. Redistributions of source code must retain the above copyright notice,
 *		this list of conditions and the following disclaimer.
 *
 *	2. Redistributions in binary form must reproduce the above copyright
 *		notice, this list of conditions and the following disclaimer in
 *		the documentation and/or other materials provided with the
 *		distribution.
 *
 *	3. All advertising materials mentioning features or use of this software
 *		must display the following acknowledgment:
 *		"This product includes software developed by the pfSense Project
 *		 for use in the pfSense software distribution. (http://www.pfsense.org/).
 *
 *	4. The names "pfSense" and "pfSense Project" must not be used to
 *		 endorse or promote products derived from this software without
 *		 prior written permission. For written permission, please contact
 *		 coreteam@pfsense.org.
 *
 *	5. Products derived from this software may not be called "pfSense"
 *		nor may "pfSense" appear in their names without prior written
 *		permission of the Electric Sheep Fencing, LLC.
 *
 *	6. Redistributions of any form whatsoever must retain the following
 *		acknowledgment:
 *
 *	"This product includes software developed by the pfSense Project
 *	for use in the pfSense software distribution (http://www.pfsense.org/).
 *
 *	THIS SOFTWARE IS PROVIDED BY THE pfSense PROJECT ``AS IS'' AND ANY
 *	EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 *	IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 *	PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE pfSense PROJECT OR
 *	ITS CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 *	SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *	NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 *	LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 *	HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,
 *	STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *	ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
 *	OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 *	====================================================================
 *
 */

##|+PRIV
##|*IDENT=page-system-license
##|*NAME=System: License
##|*DESCR=Allow access to the 'System: License' page.
##|*MATCH=license.php*
##|-PRIV

require("guiconfig.inc");
include("head.inc");
?>
<div class="panel panel-default">
	<div class="panel-heading"><h2 class="panel-title"><?=gettext("License")?></h2></div>
	<div class="panel-body content">
		<p><strong><?php printf(gettext("%s is Copyright &copy; %s %s. All rights reserved."), $g['product_name'], $g['product_copyright_years'], $g['product_copyright'])?></strong></p>
		<p><?=gettext("m0n0wall is Copyright &copy; 2002-2015 by Manuel Kasper (mk@neon1.net). All rights reserved.")?></p>
		<p><?=gettext("Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:")?></p>
		<ol type="1">
			<li><?=gettext("Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.")?></li>
			<li><?=gettext("Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.")?></li>
			<li><?=gettext("All advertising materials mentioning features or use of this software must display the following acknowledgment:")?>
				<p></p><p><?php printf(gettext("\"This product includes software developed by the %s Project for use in the %s&reg; software distribution."), $g['product_name'], $g['product_name'])?> (<a href="http://<?=$g['product_website']?>/" target="_blank">http://<?=$g['product_website']?>/</a>)."</p>
			</li>
			<li><?php printf(gettext("The names \"%s\" and \"%s Project\" must not be used to endorse or promote products derived from this software without prior written permission. For written permission, please contact"), $g['product_name'], $g['product_name'])?> <a href="mailto:<?=$g['product_email']?>"><?=$g['product_email']?></a>.</li>
			<li><?php printf(gettext("Products derived from this software may not be called \"%s\" nor may \"%s\" appear in their names without prior written permission of the %s."), $g['product_name'], $g['product_name'], $g['product_copyright'])?></li>
			<li><?=gettext("Redistributions of any form whatsoever must retain the following acknowledgment:")?>
				<p></p><p><?php printf(gettext("\"This product includes software developed by the %s Project for use in the %s software distribution"), $g['product_name'], $g['product_name'])?> (<a href="http://<?=$g['product_website']?>/" target="_blank">http://<?=$g['product_website']?>/</a>)."</p>
			</li>
		</ol>
		<p class="text-uppercase"><?php printf(gettext("THIS SOFTWARE IS PROVIDED BY THE %s PROJECT ``AS IS'' AND ANY EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES "
			. "OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE %s PROJECT OR ITS CONTRIBUTORS BE LIABLE FOR ANY DIRECT, "
			. "INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, "
			. "DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING "
			. "NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE."), $g['product_name'], $g['product_name'])?></p>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading"><h2 class="panel-title"><?=gettext("Third Party Credits")?></h2></div>
	<div class="panel-body content">
		<p>
			<?php printf(gettext("%s is based upon/includes various free software packages, listed below. The authors of %s would like to thank the authors of these software packages for their efforts."), $g['product_name'], $g['product_name'])?><br />
		</p>
		<ul class="list-group">
			<li class="list-group-item">
				<strong>FreeBSD</strong> (<a href="http://www.freebsd.org" target="_blank">http://www.freebsd.org</a>)<br />
				<?=gettext("Copyright")?> &copy;<?=gettext("1992-2016 The FreeBSD Project. All rights reserved.")?>
			</li>
			<li class="list-group-item">
				<?=gettext("This product includes") . " <strong>PHP</strong>, " . gettext("freely available from")?> (<a href="http://www.php.net/" target="_blank">http://www.php.net</a>).<br />
				<?=gettext("Copyright"); ?> &copy; <?=gettext("1999-2016 The PHP Group. All rights reserved.")?>
			</li>
			<li class="list-group-item">
				<strong>nginx</strong> (<a href="http://www.nginx.org" target="_blank">http://www.nginx.org)</a><br />
				<?=gettext("Copyright"); ?> &copy;<?=gettext("2011-2016 Nginx, Inc.")?>
				<?=gettext("All rights reserved.")?>
			</li>
			<li class="list-group-item">
				<strong>ISC DHCP</strong> <?=gettext("server")?> (<a href="http://www.isc.org/products/DHCP/" target="_blank">http://www.isc.org/products/DHCP</a>)<br />
				<?=gettext("Copyright"); ?> &copy; <?=gettext("2004-2013 Internet Software Consortium, Inc.")?><br />
				<?=gettext("Copyright"); ?> &copy; <?=gettext("1995-2003 Internet Software Consortium")?>
			</li>
			<li class="list-group-item">
				<strong>PF</strong> (<a href="http://www.openbsd.org/faq/pf" target="_blank">http://www.openbsd.org</a>)
			</li>
			<li class="list-group-item">
				<strong>MPD</strong> - Multi-link PPP daemon for FreeBSD (<a href="http://mpd.sourceforge.net/" target="_blank">http://mpd.sourceforge.net/</a>)<br />
				<?=gettext("Copyright"); ?> &copy; 2003-2004, Archie L. Cobbs, Michael Bretterklieber, Alexander Motin<br />
				<?=gettext("All rights reserved.")?>
			</li>
			<li class="list-group-item">
				<strong>Circular log support for FreeBSD syslogd</strong> (<a href="http://software.wheelhouse.org/syslogd/" target="_blank">http://software.wheelhouse.org/syslogd/</a>)<br />
				<?=gettext("Copyright"); ?> &copy; 2001 Jeff Wheelhouse (jdw@wwwi.com)
			</li>
			<li class="list-group-item">
				<strong>Dnsmasq</strong> - a DNS forwarder for NAT firewalls (<a href="http://www.thekelleys.org.uk" target="_blank">http://www.thekelleys.org.uk</a>)<br />
				<?=gettext("Copyright"); ?> &copy; 2000-2012 Simon Kelley.
			</li>
			<li class="list-group-item">
				<strong>strongSwan</strong> (<a href="https://www.strongswan.org/" target="_blank">https://www.strongswan.org</a>)<br />
				<?=gettext("Copyright"); ?> &copy; <?=gettext("2005-2016 University of Applied Sciences Rapperswil")?>
			</li>
			<li class="list-group-item">
				<strong>choparp</strong> (<a href="http://choparp.sourceforge.net/" target="_blank">http://choparp.sourceforge.net</a>)<br />
				<?=gettext("Copyright"); ?> &copy; 1997 Takamichi Tateoka (tree@mma.club.uec.ac.jp)<br />
				<?=gettext("Copyright"); ?> &copy; 2002 Thomas Quinot (thomas@cuivre.fr.eu.org)
			</li>
			<li class="list-group-item">
				<strong>php-radius</strong> (<a href="http://www.mavetju.org/programming/php.php" target="_blank">http://www.mavetju.org/programming/php.php</a>)<br />
				<?=gettext("Copyright 2000, 2001, 2002 by Edwin Groothuis. All rights reserved.")?><br />
				<?=gettext("This product includes software developed by Edwin Groothuis.")?>
			</li>
			<li class="list-group-item">
				<strong>wol</strong> (<a href="http://ahh.sourceforge.net/wol" target="_blank">http://ahh.sourceforge.net/wol</a>)<br />
				<?=gettext("Copyright"); ?> &copy; 2000,2001,2002,2003,2004 Thomas Krennwallner &lt;krennwallner@aon.at&gt;
			</li>
			<li class="list-group-item">
				<strong>OpenVPN</strong> (<a href="http://openvpn.net/" target="_blank">http://openvpn.net/</a>)<br />
				<?=gettext("Copyright (C) 2002-2016 OpenVPN Solutions LLC ")?>
			</li>
		</ul>
	</div>
</div>

<?php include("foot.inc");
