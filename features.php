<?php
    include("./inc_header.php"); 
    
     header1(
        $body_class = "features-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "features",
        $title      = "SuperNET Features - SuperNET allows you to fully experience the full potential of decentralized currency "
    )
?>
    
    <div class="headline-bg">
    </div><!--//headline-bg-->         
    
    <!-- ******Video Section****** --> 
    <section class="features-video section section-on-bg">
        <div class="container text-center">          
            <h2 class="title">Take a quick tour to see how it works</h2>
            <div class="video-container">
                <iframe src="http://player.vimeo.com/video/122937328?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div><!--//video-container-->
        </div><!--//container-->
    </section><!--//feature-video-->
    
    <!-- ******Features Section****** -->
    <section class="features-tabbed section">
        <div class="container">
            <h2 class="title text-center">Features</h2>
            <div class="row">
                <div class=" text-center col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li class="active"><a href="#feature-1" role="tab" data-toggle="tab"><i class="fa fa-cloud"></i><br /><span class="hidden-sm hidden-xs">Multigateway</span></a></li>
                        <li><a href="#feature-2" role="tab" data-toggle="tab"><i class="fa fa-connectdevelop"></i><br /><span class="hidden-sm hidden-xs">InstantDex</span></a></li>
                        <li><a href="#feature-3" role="tab" data-toggle="tab"><i class="fa fa-eye-slash"></i><br /><span class="hidden-sm hidden-xs">Teleport</span></a></li>
                        <li class="last"><a href="#feature-4" role="tab" data-toggle="tab"><i class="fa fa-laptop"></i><br /><span class="hidden-sm hidden-xs">Other Projects</span></a></li>
                    </ul><!--//nav-tabs-->
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="feature-1">
                            <h3 class="title sr-only">Feature One</h3>  
                            <figure class="figure text-center video-container">
                                <iframe class="video" src="http://player.vimeo.com/video/122184297?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                <figcaption class="figure-caption">Multigateway-Powered Supernet Client</figcaption>
                            </figure>
                            <!--
                            <div class="video-container">
                                <iframe src="http://player.vimeo.com/video/122184297?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div><!--//video-container-->
                            <!--
                            <figure class="figure text-center">
                                <img class="img-responsive" src="assets/images/figures/figure-1.png" alt="" />
                                <figcaption class="figure-caption">Multigateway-Powered Supernet Client</figcaption>
                            </figure>//-->
                            <div class="desc text-left">
                                <h3>The Multigateway</h3>
                                <p>
                                    Built on top of the NXT Asset Exchange, the P2P platform that allows you to trade digital assets of all kinds.
                                    The Multigateway is a mechanism for depositing coins into the Asset Exchange, meaning you can treat them like
                                    any other asset. It’s an add-on to the NXT client – details for installation are available on the Multigateway site.
                                </p>
                                <p>
                                    It works by using different coins’ multisignature properties. There are three separate servers that store users coins,
                                    and when a transfer is made two of these must be in agreement. What this means is that even if one is hacked, it is still
                                    impossible to transfer coins out of those wallets.
                                </p>
                                <p>
                                    When you access MGW, through the NXT client, you start by generating a unique address for each supported cryptocurrency
                                    – currently bitcoin and Litecoin, but soon a whole host of others (one of the key requirements for full support being
                                    multisignature capability). The devs have released the source code and are actively involved in helping other crypto
                                    communities add their coins to MGW.
                                </p>
                                <p>
                                    Once you've transferred your coins to the given address, you are given a corresponding number of coin assets to trade
                                    in the Asset Exchange. Unlike most regular exchanges, there is no commission fee; the only cost is the 1 NXT transaction
                                    fee, which should soon be decreased to 0.1, and possibly less in the future. When you’re done trading - which is nice
                                    and fast, due to the 1 minute block times - you can withdraw your coins to your own wallet for no more than
                                    the transaction fee for that currency.
                                </p>
                                <p>
                                    A neat side-effect of this is that MGW will provide a simple way to store many different cryptocurrencies, easily and safely.
                                    Of course, nothing will ever be as secure as cold storage, but on the other hand no one wants to run half-a-dozen different
                                    clients on their own computer, and the multi-sig approach is the next best thing. The coin assets are all recorded on the
                                    NXT blockchain under the associated address, so there’s a permanent and transparent record of all the coins you hold.
                                </p>
                                <p>
                                    It's a point of embarrassment that a technology that is devoted to decentralised money transfer should have to rely on centralised
                                    exchanges to work properly. Hopefully, thanks to initiatives like the Multigateway, the days of getting Goxxed will be behind us.
                                </p>
                                <p>
                                    Source: <a href="https://bitscan.com/articles/the-multigateway-fast-trustless-commission-free-crypto-trading">Bitscan</a>
                                </p>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-2">
                            <h3 class="title sr-only">Feature Two</h3>                                    
                            <figure class="figure text-center">
                                <img class="img-responsive" src="assets/images/figures/figure-4.png" alt="" />
                                <figcaption class="figure-caption">InstantDEX Advanced UI</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <h3>InstantDEX</h3><p>InstantDEX will enable near real-time trading between cryptocurrencies. As well as regular trading, it will be used to trade anonymous telepods of different cryptocurrency funds when Teleport is fully operational. (Negotiations are currently underway to increase SuperNET’s ownership of InstantDEX, thereby also increasing the flow of InstantDEX dividends into SuperNET.)</p>
                                <blockquote>
                                    <p>The goal of InstantDEX is to provide a fully decentralized peer-to-peer realtime trustless trading environment. InstantDEX will generate revenues by charging 0.1% to 0.2% of transactions. If it is 0.2% to each side of the trade, that is a total of 0.4% of all trade volume.</p><p>InstantDEX will let people change their bid/ask without fees and only charge when a trade happens. Since we wont have large server expenses no matter how many active traders there are, our overhead will be the lowest in the industry. This will allow InstantDEX to have lower fees initially to gain marketshare.</p><p>Trades are done directly between peers, the blockchain is used to record such trades.</p><p>I will be integrating NXTsubatomic and NXTatomic into InstantDEX. While these are not realtime trading mechanisms, they are related to trading and it makes sense for them to be part of InstantDEX. A nice bonus for all the InstantDEX holders.</p><p>The monetization model is clear and simple. The centralized exchanges charge 0.2% to 0.5% for each trade, plus additional fees for withdrawal. InstantDEX will not have any fees for withdrawals and the commissions will be set to 0.1% at first. Keep in mind that this is charged to both buyer and seller so the total revenue will be 0.2%. This will be the lowest in the industry and coupled with the decentralized nature will provide a strong competitive advantage.</p><p>The InstantDEX does not have ownership linkages, but it does have revenue sharing linkages. Half of its revenues are going to assetholders and the other half are shared among various parties, such as MGW, Tradebots (aka NXTcoinsco), BTCD stakers, uMGW operators, and some unallocated revenues that I plan to use top optimize positive feedbacks. Currently i am thinking of providing global revenue sharing to all the SuperNET users for most of the balance. I figure getting this revenue flow would be more effective than any sort of advertising campaign, but I need to see how things unfold.</p><p>--James Lee</p>
                                </blockquote>
                                
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-3">
                            <h3 class="title sr-only">Feature Three</h3>
                            <div class="desc text-left"><h2>Teleport</h2><p>So-called anonymous coins come in many different forms, but they tend to rely on a limited range of different approaches towards achieving anonymity. One of the most common approaches is mixing, which essentially means combining a lot of different transactions so that it's hard to know which output originates from which address. For example, Darkcoin uses an implementation of CoinJoin, a mixing protocol.</p>
<p>Another approach is to use ring signatures, like Boolberry or Monero. Whereas most transactions are signed by one key, with a ring signature a number of different keys can sign the same transaction, so it becomes far harder to know who sent the transaction in question. Ring signatures arguably offer a greater degree of privacy but they come at the cost of considerable blockchain bloat - though Boolberry's developer has found a neat way to sidestep this issue.</p>
<p>Mixing offers what might be called 'personal level' privacy - good enough for many day-to-day circumstances. Ring signatures are a step up from that and can be very effective (hence BBR's inclusion in the core of SuperNET). But even there, some correlations might be made by a determined attacker.</p>
<p>Teleport: a new approach</p>
<p>Teleport uses a completely different approach to anonymity. Like many of the best ideas, Teleport is elegant in its simplicity - it's just that there are complex concepts to negotiate along the way. Instead of looking for a way to obscure the source of a transaction, Teleport considers the methods by whichan attacker might find out who is sending a transaction and aims to avoid them altogether. To explain further:</p>
<p>Transaction linkage. With Bitcoin, every address can be linked to the one used before it, right back to the block from which it was mined. If you know the identity of the owner of one address or take an interest in the activity which a certain address displays, you can follow the transactions to and from it - and very likely eventually link that person with another known address. Teleport avoids this by using one-time addresses called telepods. If no address is used more than once, it's impossible to link it to any other part of the network. In the original Bitcoin white paper, Satoshi Nakamoto recommends using new addresses for every transaction. Suffice to say that few people do so because it's too much trouble. Teleport builds this into the system.</p>
<p>Timing attack. Perhaps you know that a given transaction was supposed to happen at a certain time. Because everything is on the blockchain, any transaction within the relevant time frame falls under suspicion. This can be used in conjunction with other methods to narrow down the list of transactions to analyse. Teleport introduces random delays and allows recipients to decide when to move the money they have been sent in a telepod, so a change might only show up on the blockchain much later.</p>
<p>Mantissa attack. If you send a distinctive amount of money - whether that's a very large sum, or one with a characteristic mantissa (the numbers after the decimal point), then it's extremely easy to spot on the blockchain and follow. A mantissa attack - a term coined in the Teleport DarkPaper - is particularly effective if you know someone is transferring a dollar equivalent of money, perhaps because they have posted the information in a forum or it has otherwise been intercepted. Knowing the exchange rate and the rough timing of the transfer allows a high degree of correlation with blockchain transactions that fit the right criteria. Teleport uses standard denomination telepods - units of 100, 50, 10, 5, 1 and so on - so that unusual amounts won't raise any flags.</p>
<p>Whilst taking care of the above vulnerabilities should be sufficient for everyday privacy requirements, you do of course also need to guard against voluntarily disclosing personal information; a huge amount of data relevant to cryptocurrency addresses and transactions can be and is harvested from forums and other sources in a method known as fingerprinting. As an aside, if you have your crypto address in your signature, you might want to think again - at least, if you take anonymity seriously.</p>
<p>However, even having adopted good personal practice as regards securing your privacy online you could still be vulnerable to  a well-resourced attacker correlating activity from your IP address to movements on the blockchain.</p>
<p>IP address detection. For those wanting a really robust solution suitable for hi-tech business (think industrial espionage) or resistant to intrusive government surveillance (China, US, UK&hellip;) it's necessary to hide the fact that you are the one conducting a transaction at all. This is where the privacyServer comes into play. It's the piece de resistance of Teleport, and it's what makes it a platform capable of supporting so much more than just a simple cryptocurrency transaction.</p>
<p>Instead of submitting a transaction directly to the network, the privacyServer encrypts it multiple times and passes it through several other nodes (other privacyServers) first - a technique known as onion routing, used by other applications including the infamous TOR project. Not only that, but every transaction is also split into several pieces and sent to a number of different nodes, only some of which send it on to its final destination (and this is the simplified version!).</p>
<p>The result is that even if an attacker knows that you are part of the network, and even if they compromise one or even many nodes, it becomes incredibly difficult to link the user with the transaction that ultimately follows, given that it's bouncing around many intermediaries and being pulled to pieces and reconstituted at the end. As a broad analogy, imagine printing a paper wallet for your bitcoins, photocopying it several times, shredding the copies, then sending multiple nested packets of the paper fragments to lots of different people, some of whom forward the contents on to others, some of whom forward those contents to the final recipient, who piece the shreds back together&hellip; 'Impossible' isn't a word that should be used in these circumstances, because a determined attacker with unlimited resources can always find ways to cause you trouble, but it's about the closest thing to complete anonymity available in the foreseeable future.</p>
<p>Pros and cons</p>
<p>The result is an extremely robust system that uses both common sense and cutting-edge technology to prevent an outsider from learning what's going on inside the BTCD ecosystem. Moreover, by using services such as InstantDEX and TradeBots (instant and automated trading applications), the advantages can be extended to any other supported cryptocurrency: BTCD will turn anything dark.</p>
<p>There aren't many downsides to Teleport. One is simply that setting up a fully effective privacyServer requires a certain degree of technical competence and possibly a small financial cost for a VPS, though you'll still enjoy pretty good privacy without that. Another is that transactions are best made when both parties are online; because the recipient is (in a very simplified explanation) being sent a private key and using it to sweep the balance of one address into a new account, a long delay could give rise to double-spending on the part of the sender. This would never result in lost funds though, because the transaction would not be acknowledged as complete by the recipient. It would, at most, be an inconvenience. In other circumstances it could even be considered an advantage because the delay brings added protection against a timing attack, should the attacker even be able to correlate activity from the sender's IP address with any blockchain activity in the first place.</p>
<p>Brave new world?</p>
<p>With continued revelations bringing to light the unprecedented levels of surveillance from the NSA and other government agencies, as well as the rise of big data and the aggressive, large-scale harvesting of personal information by corporations, it's fair to say that both sides on this issue will be upping their game. The arms race for privacy is only just getting started. For now, it's nice to be one step ahead of the competition.</p>
<p>You can find out more about Teleport by <a href="http://www.flipgorilla.com/p/23023990364728535/show#/23023990364728535/0">reading the DarkPaper</a> or visiting the <a href="https://bitcointalk.org/index.php?topic=684090.0">BTCD thread on bitcointalk</a>.</p><h2>Telepathy</h2>
<p>SuperNET runs on a platform that makes the most of both NXT's and BTCD's powerful features. NXT provides the functionality, BTCD the secure communication. Anonymous transactions are, of course, a major strand of this - take a look at the <a href="http://nxter.org/a-closer-look-at-teleport/">Teleport article</a> if you want to know more.</p>
<p>Different cryptocurrencies approach anonymity in different ways - typically with ring signatures or mixing. In the case of Teleport, standard denomination addresses are cloned or swept into new ones by the recipient, so that they only ever lead back to one place: the originator. But no matter how sophisticated an anonymous cryptocurrency is, there's always going to be a weakness. Even if everything on the blockchain is completely obscure, you can still be compromised if someone is monitoring your IP address or that of your recipient.</p>
<p>So the new cutting edge question becomes: How do you send a letter without anyone knowing the address of your recipient - including you?</p>
<p>Distributed Hash Tables</p>
<p>This is the problem that Telepathy, jl777's anonymity network for BTCD and <a href="http://nxter.org/category/supernet-newsletters/">SuperNET</a>, aims to solve. At its heart, it's a peer-to-peer network - much like the one used by BitTorrent for file-sharing. These networks pass packets of information between users or nodes. Each node knows of a few others in its vicinity, but not the whole network - which could consist of tens or hundreds of thousands of nodes.</p>
<p>Each time a node receives a packet, it passes it on to those closer to the recipient than itself. In this way, the packet gets closer and closer to its destination, until it finally reaches whoever it's meant for. No one needs full oversight of the network, and there's no central look-up table - something that was the death of Napster, since it meant it could be shut down.</p>
<p>These networks use something called Distributed Hash Tables, or DHT. These are not just very fast, efficient look-up tables, they also have some other interesting and useful properties as well. The DHT provides a kind of overlay to the network that nodes use to route packets - this overlay functions like a map and is used by the nodes to pass information on to the next node.</p>
<p>However, although the map is internally consistent, it bears absolutely no resemblance to where the nodes are in real life. Two locations that are next to each other in network space could be in different continents in the physical world - or they could be right next door to each other. It's a little like the London Underground map, which barely reflects its above-ground geography at all but still enables straightforward travel from A to B for commuters.</p>
<p>Dead drops</p>
<p>This property can be used to route packets anonymously.</p>
<p>All a node has to do is select a location in network space (designated by a NXT public key, as it happens) that is near to itself, as well as many other nodes, but that doesn't correspond to any given node: a dead drop.</p>
<p>The packet will be routed through the network, peer to peer, getting closer to its destination at each step. It will never reach its destination, of course, because that point doesn't belong to any node, but it doesn't matter: so long as the intended recipient handles the packet at some point, it can read the contents. To make sure it does get to the recipient, the node closest to the dead drop sends the packet to all of the nodes within a given distance - perhaps 20 or 30 in all. Since the packets are all encrypted, no one else will be able to see inside - but no one else will know that the intended recipient has read it either.</p>
<p>An analogy might go something like this:</p>
<p>Alice wants to deliver a message to Bob. She doesn't know where Bob lives, but the two of them have previously agreed a location to which to send the message. The address doesn't exist, but Bob has suggested it because he lives close by and can be in the general vicinity<del></del>.</p>
<p>Alice encodes her message with a cipher only Bob uses, and writes it on a postcard. She gives it to a courier and tells him to drop it at the fictitious address in the centre of town. She points the courier in the right direction and off he goes. After a few minutes, he stops a passerby to ask for directions. The passerby again points him in the right direction, and he walks a little further.</p>
<p>A few more stops and sets of directions later, and the courier is standing in the town centre. As he's looking around for an address that doesn't exist, he asks directions from a couple of dozen other people he sees there, including Bob. Understandably, none of these people know where the courier is going, but all of them look over his shoulder and read the postcard while they're talking to him. Bob walks away with his message, but no one else knows that he was the intended recipient, or what the message said.</p>
<p>The Last Mile</p>
<p>This solution - called 'Telepathy' because messages are delivered apparently without anyone knowing they've even been received - effectively solves the so-called 'Last Mile' problem. In the network, packets are routed around from node to node. At the last stage, though, when the packet reaches its destination, anyone monitoring the network could tell who the recipient is. With this system, though, assuming an attacker even has the ability to see what network activity there is (no mean feat in itself), they now have to choose between twenty or thirty different potential recipients. That's for every packet, whether it's an anonymous cryptocurrency transaction or a simple 'hello' message. The more traffic, the harder it becomes to make useful deductions.</p>
<p>Telepathy has a few other tricks up its sleeve - onion routing before starting normal peer-to-peer transmission, random delays to confuse observers, and so on - but this solution to the last mile problem is what sets it qualitatively apart from its competitors. With the right encryption, no one can read your messages. Now, no one can even figure out who you're communicating with - or whether you're even communicating at all.</p>                                
                            </div><!--//desc-->                                    
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-4">
                            <h3 class="title sr-only">Feature Four</h3>                                    
                            <div class="desc text-left">
                                    <ul>
                                            <li><a href="http://coinomat.com">Coinomat</a> & <a href="http://coinimal.com">Coinimal</a></li>
                                            <li><a href="http://neodice.com">NeoDice</a> - Decentralized NXT Dice</li>
                                            <li><a href="http://www.pangeapoker.net">Pangea</a> - Decentralized Poker</li>
                                            <li><a href="http://atomicdac.org">Atomic</a> - Cross-Chain Ledger</li>
                                            <li><a href="http://nxter.org/nxtcoinsco-tradebots-asset-nxt-ae/">Tradebots</a> - Decentralized Trading Bots</li>
                                            <li><a href="http://nxtfreemarket.com">Freemarket</a> - Decentralized Marketplace</li>
                                            <li><a href="https://nxtforum.org/index.php?topic=6826.0">Skynet</a> - Decentralized AI</li>
                                            <li><a href="http://www.finhive.com">Finhive</a> - Financial Analysis from Skynet</li>
                                    </ul>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                    </div><!--//tab-content-->
                </div><!--//col-md-x-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//features-tabbed-->
    
    <!-- ******Steps Section****** --> 
    <section class="steps section">
        <div class="container">
            <h2 class="title text-center">3 Simple Steps to Get you started with SuperNET</h2>
            <div class="row">
                 <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                     <h3 class="title"><span class="number">1</span><br /><span class="text">Download the Wallet</span></h3>
                 </div><!--//step-->
                 <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                     <h3 class="title"><span class="number">2</span><br /><span class="text">Sign Up</span></h3>
                 </div><!--//step-->
                 <div class="step text-center col-md-4 col-sm-4 col-xs-12">
                     <h3 class="title"><span class="number">3</span><br /><span class="text">Start Exploring!</span></h3>
                 </div><!--//step-->
            </div><!--//row-->
            
            <div class="text-center"><a class="btn btn-cta btn-cta-primary" href="download.php">Get Started - It's Free</a></div>
            
        </div><!--//container-->        
    </section><!--//steps-->

<?php
    include("./inc_footer.php");
?>
