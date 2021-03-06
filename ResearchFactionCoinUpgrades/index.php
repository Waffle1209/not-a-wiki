<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php include "../scripts/header.html"; ?>
<h6><a href="/realm/ResearchUpgrades/"><img src="http://musicfamily.org/realm/Factions/picks/ResearchTopPage.png"></a></h6>
<p><b>Spellcraft</b>
<p><b>S50</b> - <b>For</b>: Goblin - <b>Research Name</b>: Conjuration
<p><b>Requirement</b>: Have 6000 mana (as Fairy) (This Game)
<p><b>Cost</b>: 318.8 Tqag (3.188E134)
<p><b>Effect</b>: Each time you cast a spell you also cast free Tax Collections based on the amount of Goblin Banks you own.
<p><b>Effect</b>: Also increases offline spell cast amount multiplicatively by 150%.
<p><b>Formula</b>: floor(x /650), where x is the number of Goblin Banks you own.
<p><b>------------------------------</b>
<p><b>Craftsmanship</b>
<p><b>C105</b> - <b>For</b>: All Factions - <b>Research Name</b>: Woodcraft
<p><b>Requirement</b>: 25,000 clicks (This Game)
<p><b>Cost</b>: 1.544 Spqag (1.544E144)
<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Unique Buildings you own.
<p><b>Formula</b>: floor(1.5 * x ^ 1.05)%, where x is the number of Unique Buildings you own.
<br/>
<br/>
<p><b>C250</b> - <b>For</b>: All Factions - <b>Research Name</b>: Magnetism
<p><b>Requirement</b>: Research Tinkering (C150) &amp; Critical Strike (W225).
<p><b>Cost</b>: 52.7 Qiqig (5.27E169)
<p><b>Effect</b>: Increase the chance to find Faction Coins by a multiplicative 50%
<p><b>Effect</b>: Increase the chance to find faction coins based on total time spent offline. (in minutes)
<p><b>Formula</b>: floor(7.5 * x ^ 0.75), where x is your Time Spent Offline (Total) in minutes stat.
<br/>
<br/>
<p><b>C400</b> - <b>For</b>: All Factions - <b>Research Name</b>: Gravitation
<p><b>Requirement</b>: Research Magnetism (C250) &amp; Weighting (C300)
<p><b>Cost</b>: 13.66 QaSxg (1.366E196)
<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of Faction Coins found in this game.
<p><b>Effect</b>: Also increase the chance to find Faction Coins by a multiplicative 175%.
<p><b>Formula</b>: floor(3.5 * ln^3(x + 1)), where x is your Faction Coins Gained (This Game) stat.
<br/>
<br/>
<p><b>C520</b> - <b>For</b>: Dwarf - <b>Research Name</b>: Blacksmithing
<p><b>Requirement</b>: Research Reinforcing (C135) &amp; Metallurgy (C405)
<p><b>Cost</b>: 18.47 USpg (1.847E217)
<p><b>Effect</b>: Increase clicking reward for Diamond Pickaxe based on the amount of Dwarvin Forges you own.
<p><b>Effect</b>: Also increase Faction Coin find chance bonus of Diamond Pickaxe based on the amount of Dwarvin Forges you own.
<p><b>Formula</b>: Clicking Reward: 2.5 * x^0.3%, where x is the number of Dwarven Forges you own.
<p><b>Formula</b>: Diamond Pickaxe: 20 * x^0.4%, where x is the number of Dwarven Forges you own.
<p><b>------------------------------</b>
<p><b>Divine</b>
<p><b>D50</b> - <b>For</b>: Elf - <b>Research Name</b>: Hallowing
<p><b>Requirement</b>: 15,000 Good Buildings(as Angel)
<p><b>Cost</b>: 318.8 Tqag (3.188E134)
<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of Elven Training Grounds you own.
<p><b>Formula</b>: floor(5 * x^0.85)%, where x is the number of Elven Training Grounds you own.
<br/>
<br/>
<p><b>D150</b> - <b>For</b>: All Factions - <b>Research Name</b>: Retribution
<p><b>Requirement</b>: Research Betrayal (W120) &amp; Transfixion (D55).
<p><b>Cost</b>: 129.6 Noqag (1.296E152)
<p><b>Effect</b>: Increase chance to find faction coins based on the amount of research made.
<p><b>Formula</b>: floor(0.05 * x ^ 1.25), where x is the amount of research made.
<p><b>------------------------------</b>
<p><b>Economics</b>
<p><b>E30</b> - <b>For</b>: All Factions - <b>Research Name</b>: Diplomacy
<p><b>Requirement</b>: 1000 Exchanges (This Game)
<p><b>Cost</b>: 95.88 Dqag (9.588E130)
<p><b>Effect</b>: Increases Faction Coin find chance and Royal Exchange bonus based on time spent in this game.
<p><b>Formula</b>: Faction Coin Chance: floor(1.5 * x^1.05)%
<p><b>Formula</b>: Royal Exchange bonus: floor(x^0.6)%, where x is Playtime (This Game in minutes).
<br/>
<br/>
<p><b>E145</b> - <b>For</b>: All Factions - <b>Research Name</b>: Royal Demand
<p><b>Requirement</b>: 5,000 Tax Collections (This R), Research Cultivation (C10) &amp; Woodcraft (C105)
<p><b>Cost</b>: 17.07 Noqag (1.707E151)
<p><b>Effect</b>: Increase Tax Collection reward by 30 seconds of production.
<p><b>------------------------------</b>
<p><b>Alchemy</b>
<p><b>A305</b> - <b>For</b>: All Factions - <b>Research Name</b>: Engraving
<p><b>Requirement</b>: 5 days as Druids (Total across all Rs)
<p><b>Cost</b>: 255.2 OcQig (2.552E179)
<p><b>Effect</b>: Increase your chance to find Faction Coins based on the amount of spells cast in this game.
<p><b>Effect</b>: Also increase Faction Coins find chance by a multiplicative 100%.
<p><b>Formula</b>: floor(3.5 * logE(1+x) ^ 3.5)%, where x is your Spells Cast (This Game) stat,
<p> or approximately
<p><b>Formula</b>: floor((ln(x) + 0.69)^{2.75})%, where x is your Spells Cast (This Game) stat.
<br/>
<br/>
<p><b>A3400</b> - <b>For</b>: Any - <b>Research Name</b>: Chemistry
<p><b>Requirement</b>: 1 No (1e30) FC (Found this Game), (Customizing C3000) and (Manipulation S3200).
<p><b>Cost</b>: 533.7 QiSxg (5.337e200)
<p><b>Effect</b>: Increases Faction Coin find chance based on the total amount of Lineage levels you have.
<p><b>Effect</b>: Also increases Faction Coin find chance by a multiplicative 350%.
<p><b>Formula</b>: 3 * x ^ 2.25, where x is total Lineage levels.
<p><b>------------------------------</b>
<p><b>Warfare</b>
<p><b>W50</b> - <b>For</b>: Undead - <b>Research Name</b>: Exertion
<p><b>Requirement</b>: 2 days of Evil Play Time, Note: Play as any Evil faction, but you must be Demon to unlock this.
<p><b>Cost</b>: 318.8 Tqag (3.188E134)
<p><b>Effect</b>: Increase faction coin find chance based on the number of Undercities you own.
<p><b>Formula</b>: (floor(6.5x^0.65))%, where x is the number of Undercities you own.
<br/>
<br/>
<p><b>W275</b> - <b>For</b>: Faceless - <b>Research Name</b>: Domination
<p><b>Requirement</b>: 300 Base Assistants (as Faceless)
<p><b>Cost</b>: 1.331 SpQig (1.331E174)
<p><b>Effect</b>: Gain additional Faction Coins per second based on the highest amount of assistants you had in a single game.
<p><b>Effect</b>: Also a 50% multiplicative Faction Coin find chance.
<p><b>Formula</b>: floor(125*x&^0.75), where x is your Assistants (Max) stat.
<br/>
<br/>
<p><b>W1375</b> - <b>For</b>: Any - <b>Research Name</b>: Scavenging
<p>Requirement: 86400s 7 days spent as evil (Across all Rs)
<p><b>Cost</b>: 651.9 Qavg (6.519E77)
<p><b>Effect</b>: Increases Faction Coin find chance by a multiplicative 275%.
<p><b>Effect</b>: Increase the chance to find Faction Coins based on the amount of assistants you own.
<p><b>Formula</b>: (2500*x^0.425), where x is assistants
<?php include "../scripts/footer.html"; ?>
