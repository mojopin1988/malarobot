<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

if(!$update)
{
  exit;
}

$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$voice = isset($update['voice']) ? $update['voice'] : "";

$responses = array();
$responses['siena'] = array();
$responses['siena'][] = 'tu vai a Siena, tu la trombi e zitto!';
$responses['siena'][] = 'Siena città di merda';
$responses['siena'][] = 'che ti dicevo che andavi a trombare...e zitto?!';

$responses['cinque stelle'] = array();
$responses['cinque stelle'][] = 'Passerò alla storia come attentatore di gigino';
$responses['cinque stelle'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['cinque stelle'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['cinque stelle'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['cinque stelle'][] = 'Dopo la vittoria del M5S non rido più';
$responses['cinque stelle'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['cinque stelle'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['5 stelle'] = array();
$responses['5 stelle'][] = 'Passerò alla storia come attentatore di gigino';
$responses['5 stelle'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['5 stelle'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['5 stelle'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['5 stelle'][] = 'Dopo la vittoria del M5S non rido più';
$responses['5 stelle'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['5 stelle'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['m5s'] = array();
$responses['m5s'][] = 'Passerò alla storia come attentatore di gigino';
$responses['m5s'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['m5s'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['m5s'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['m5s'][] = 'Dopo la vittoria del M5S non rido più';
$responses['m5s'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['m5s'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['pentastellati'] = array();
$responses['pentastellati'][] = 'Passerò alla storia come attentatore di gigino';
$responses['pentastellati'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['pentastellati'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['pentastellati'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['pentastellati'][] = 'Dopo la vittoria del M5S non rido più';
$responses['pentastellati'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['pentastellati'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';
$responses['pentastellati'][] = 'PENTASTELLATO INFAME PER TE SOLO LE LAME';

$responses['grillo'] = array();
$responses['grillo'][] = 'Passerò alla storia come attentatore di gigino';
$responses['grillo'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['grillo'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['grillo'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['grillo'][] = 'Lo voglio menare';
$responses['grillo'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['grillo'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['di maio'] = array();
$responses['di maio'][] = 'Passerò alla storia come attentatore di gigino';
$responses['di maio'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['di maio'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['di maio'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['di maio'][] = 'Lo voglio menare';
$responses['di maio'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['di maio'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['giggino'] = array();
$responses['giggino'][] = 'Passerò alla storia come attentatore di gigino';
$responses['giggino'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['giggino'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['giggino'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['giggino'][] = 'Lo voglio menare';
$responses['giggino'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['giggino'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['movimento'] = array();
$responses['movimento'][] = 'Passerò alla storia come attentatore di gigino';
$responses['movimento'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['movimento'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['movimento'][] = 'Madonna puttana lo piglio a pizze in faccia a giggino';
$responses['movimento'][] = 'Dopo la vittoria del M5S non rido più';
$responses['movimento'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['movimento'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['premier'] = array();
$responses['premier'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['premier'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['premier'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['premier'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['premier'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['presidente'] = array();
$responses['presidente'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['presidente'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['presidente'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['presidente'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['presidente'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['salvini'] = array();
$responses['salvini'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['salvini'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['salvini'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['salvini'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['salvini'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['meloni'] = array();
$responses['meloni'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['meloni'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['meloni'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['meloni'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['meloni'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['berlusconi'] = array();
$responses['berlusconi'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['berlusconi'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['berlusconi'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['berlusconi'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['berlusconi'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['ministro'] = array();
$responses['ministro'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['ministro'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['ministro'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['ministro'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['ministro'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['conte'] = array();
$responses['conte'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['conte'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['conte'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['conte'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['conte'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['mattarella'] = array();
$responses['mattarella'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['mattarella'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['mattarella'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['mattarella'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['mattarella'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['cristiana'] = array();
$responses['cristiana'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['cristiana'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['cristiana'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['cristiana'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['cristiana'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['senato'] = array();
$responses['senato'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['senato'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['senato'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['senato'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['senato'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['5s'] = array();
$responses['5s'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['5s'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['5s'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['5s'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['5s'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['lega'] = array();
$responses['lega'][] = 'No ragazzi, io mi fo saltare in aria!';
$responses['lega'][] = 'No ragazzi, riformiamo le BR, le BR novolesi';
$responses['lega'][] = 'Madonna puttana piglio tutti a pizze in faccia';
$responses['lega'][] = 'Diocane ragazzi organizziamo un attentato!?';
$responses['lega'][] = 'Sono seriamente preoccupato delle sorti del nostro belpaese';

$responses['ladro'] = array();
$responses['ladro'][] = 'Se viene a Novoli gli si insegna come gira il mondo';
$responses['ladro'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['ladro'][] = 'Perche non è mai venuto a Novoli';
$responses['ladro'][] = 'Digli di venire a Novoli vai';
$responses['ladro'][] = 'Se viene a Novoli fa la fine di Dimitri Grosu';
$responses['ladro'][] = 'Mai attaccare in una città straniera';

$responses['zingari'] = array();
$responses['zingari'][] = 'Se viene a Novoli gli si insegna come gira il mondo';
$responses['zingari'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['zingari'][] = 'Perche non è mai venuto a Novoli';
$responses['zingari'][] = 'Digli di venire a Novoli vai';
$responses['zingari'][] = 'Se viene a Novoli fa la fine di Dimitri Grosu';
$responses['zingari'][] = 'Mai attaccare in una città straniera';

$responses['zingaro'] = array();
$responses['zingaro'][] = 'Se viene a Novoli gli si insegna come gira il mondo';
$responses['zingaro'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['zingaro'][] = 'Perche non è mai venuto a Novoli';
$responses['zingaro'][] = 'Digli di venire a Novoli vai';
$responses['zingaro'][] = 'Se viene a Novoli fa la fine di Dimitri Grosu';
$responses['zingaro'][] = 'Mai attaccare in una città straniera';

$responses['criminale'] = array();
$responses['criminale'][] = 'Se viene a Novoli gli si insegna come gira il mondo';
$responses['criminale'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['criminale'][] = 'Perche non è mai venuto a Novoli';
$responses['criminale'][] = 'Digli di venire a Novoli vai';
$responses['criminale'][] = 'Se viene a Novoli fa la fine di Dimitri Grosu';
$responses['criminale'][] = 'Mai attaccare in una città straniera';

$responses['bullo'] = array();
$responses['bullo'][] = 'Se viene a Novoli gli si insegna come gira il mondo';
$responses['bullo'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['bullo'][] = 'Perche non è mai venuto a Novoli';
$responses['bullo'][] = 'Digli di venire a Novoli vai';
$responses['bullo'][] = 'Se viene a Novoli fa la fine di Dimitri Grosu';
$responses['bullo'][] = 'Mai attaccare in una città straniera';

$responses['mafioso'] = array();
$responses['mafioso'][] = 'Digli di vienire a Novoli che gli si insegna come gira il mondo';
$responses['mafioso'][] = 'Vai vai, digli di venire a Novoli che poi la cresta si abbassa';
$responses['mafioso'][] = 'Perche non è mai venuto a Novoli';
$responses['mafioso'][] = 'Digli di venire a Novoli vai';
$responses['mafioso'][] = 'Se viene a Novoli fa la fine di Dimitri Grosu';
$responses['mafioso'][] = 'Mai attaccare in una città straniera';

$responses['rubare'] = array();
$responses['rubare'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['rubare'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['rubare'][] = 'Perche non si passa per Novoli';
$responses['rubare'][] = 'Vieni a Novoli vai';
$responses['rubare'][] = 'A Novoli fai la fine di Dimitri Grosu';
$responses['rubare'][] = 'Mai attaccare in una città straniera';

$responses['rubato'] = array();
$responses['rubato'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['rubato'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['rubato'][] = 'Perche non si passa per Novoli';
$responses['rubato'][] = 'Vieni a Novoli vai';
$responses['rubato'][] = 'A Novoli fai la fine di Dimitri Grosu';
$responses['rubato'][] = 'Mai attaccare in una città straniera';

$responses['menare'] = array();
$responses['menare'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['menare'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['menare'][] = 'Perche non si passa per Novoli';
$responses['menare'][] = 'Vieni a Novoli vai';
$responses['menare'][] = 'A Novoli fai la fine di Dimitri Grosu';
$responses['menare'][] = 'Mai attaccare in una città straniera';

$responses['menato'] = array();
$responses['menato'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['menato'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['menato'][] = 'Perche non si passa per Novoli';
$responses['menato'][] = 'Vieni a Novoli vai';
$responses['menato'][] = 'A Novoli fai la fine di Dimitri Grosu';
$responses['menato'][] = 'Mai attaccare in una città straniera';

$responses['botte'] = array();
$responses['botte'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['botte'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['botte'][] = 'Perche non si passa per Novoli';
$responses['botte'][] = 'Vieni a Novoli vai';
$responses['botte'][] = 'A Novoli fai la fine di Dimitri Grosu';
$responses['botte'][] = 'Mai attaccare in una città straniera';

$responses['manate'] = array();
$responses['manate'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['manate'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['manate'][] = 'Perche non si passa per Novoli';
$responses['manate'][] = 'Vieni a Novoli vai';
$responses['manate'][] = 'A Novoli fai la fine di Dimitri Grosu';
$responses['manate'][] = 'Mai attaccare in una città straniera';

$responses['schiaffi'] = array();
$responses['schiaffi'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['schiaffi'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['schiaffi'][] = 'Perche non si passa per Novoli';
$responses['schiaffi'][] = 'Vieni a Novoli vai';
$responses['schiaffi'][] = 'A Novoli fai la fine di Dimitri Grosu';

$responses['novoli'] = array();
$responses['novoli'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['novoli'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['novoli'][] = 'Perche non si passa per Novoli';
$responses['novoli'][] = 'Vieni a Novoli vai';
$responses['novoli'][] = 'A Novoli fai la fine di Dimitri Grosu';
$responses['novoli'][] = 'Mai attaccare in una città straniera';

$responses['cazzotti'] = array();
$responses['cazzotti'][] = 'Fai di venire a Novoli, lì si insegna come gira il mondo';
$responses['cazzotti'][] = 'Vai vai, fai venire a Novoli che poi si abbassa la cresta';
$responses['cazzotti'][] = 'Perche non si passa per Novoli';
$responses['cazzotti'][] = 'Vieni a Novoli vai';
$responses['cazzotti'][] = 'A Novoli fai la fine di Dimitri Grosu';

$responses['napoli'] = array();
$responses['napoli'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['napoli'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['napoli'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['napoli'][] = 'TERRONI DI MERDA';

$responses['terrone'] = array();
$responses['terrone'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['terrone'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['terrone'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['terrone'][] = 'TERRONI DI MERDA';

$responses['sud'] = array();
$responses['sud'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['sud'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['sud'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['sud'][] = 'TERRONI DI MERDA';

$responses['terroni'] = array();
$responses['terroni'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['terroni'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['terroni'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['terroni'][] = 'TERRONI DI MERDA';

$responses['meridione'] = array();
$responses['meridione'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['meridione'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['meridione'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['meridione'][] = 'TERRONI DI MERDA';

$responses['campania'] = array();
$responses['campania'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['campania'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['campania'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['campania'][] = 'TERRONI DI MERDA';

$responses['napoletano'] = array();
$responses['napoletano'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['napoletano'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['napoletano'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['napoletano'][] = 'TERRONI DI MERDA';

$responses['battipaglia'] = array();
$responses['battipaglia'][] = 'Ma vai a mangiare la pizza alla camorra';
$responses['battipaglia'][] = 'Hai mai assaggiato la pizza alla monnezza?';
$responses['battipaglia'][] = 'Vai a mangiare la pastiera di donna colera';
$responses['battipaglia'][] = 'TERRONI DI MERDA';

$responses['cucina'] = array();
$responses['cucina'][] = 'Torna a mangiare i tortellini ripieni di miseria';
$responses['cucina'][] = 'Sei un fottuto Rontese in realtà';

$responses['toscana'] = array();
$responses['toscana'][] = 'Torna a mangiare i tortellini ripieni di miseria';
$responses['toscana'][] = 'Sei un fottuto Rontese in realtà';

$responses['ronta'] = array();
$responses['ronta'][] = 'Torna a mangiare i tortellini ripieni di miseria';
$responses['ronta'][] = 'Sei un fottuto Rontese in realtà';

$responses['sagra'] = array();
$responses['sagra'][] = 'Torna a mangiare i tortellini ripieni di miseria';
$responses['sagra'][] = 'Sei un fottuto Rontese in realtà';

$responses['firenze'] = array();
$responses['firenze'][] = 'Torna a mangiare i tortellini ripieni di miseria';
$responses['firenze'][] = 'Sei un fottuto Rontese in realtà';
$responses['firenze'][] = 'il vero fiorentino è solo Novolese, da almeno 3 generazioni';

$responses['israele'] = array();
$responses['israele'][] = 'Allora tenetevi gli Arabi di merda diahane!';
$responses['israele'][] = 'Ma sei di Tel Aviv? Non sapevo...';

$responses['ebrei'] = array();
$responses['ebrei'][] = 'Allora tenetevi gli Arabi di merda diahane!';
$responses['ebrei'][] = 'Ma sei di Tel Aviv? Non sapevo...';

$responses['ebreo'] = array();
$responses['ebreo'][] = 'Ma sei di Tel Aviv? Non sapevo...';
$responses['ebreo'][] = 'Allora tenetevi gli Arabi di merda diahane!';

$responses['palestina'] = array();
$responses['palestina'][] = 'Tenetevi gli Arabi di merda diahane!';
$responses['palestina'][] = 'Ma sei di Tel Aviv? Non sapevo...';

$responses['sionista'] = array();
$responses['sionista'][] = 'Ma sei di Tel Aviv? Non sapevo...';
$responses['sionista'][] = 'Allora tenetevi gli Arabi di merda diahane!';

$responses['giudaico'] = array();
$responses['giudaico'][] = 'Ma sei di Tel Aviv? Non sapevo...';
$responses['giudaico'][] = 'Allora tenetevi gli Arabi di merda diahane!';

$responses['ebrei'] = array();
$responses['ebrei'][] = 'Ma sei di Tel Aviv? Non sapevo...';
$responses['ebrei'][] = 'Allora tenetevi gli Arabi di merda diahane!';

$responses['israele'] = array();
$responses['israele'][] = 'Ma sei di Tel Aviv? Non sapevo...';
$responses['israele'][] = 'Allora tenetevi gli Arabi di merda diahane!';

$responses['isis'] = array();
$responses['isis'][] = 'Tenetevi gli Arabi di merda diahane!';

$responses['russia'] = array();
$responses['russia'][] = 'Russi bastardi traditori';
$responses['russia'][] = 'Speriamo prenda foho tutta la Siberia';
$responses['russia'][] = 'Speriamo falliscano Russi traditori';
$responses['russia'][] = 'E finirà il gas naturale prima o dopo sai';

$responses['russi'] = array();
$responses['russi'][] = 'Russi bastardi traditori';
$responses['russi'][] = 'Speriamo prenda foho tutta la Siberia';
$responses['russi'][] = 'Speriamo falliscano Russi traditori';
$responses['russi'][] = 'E finirà il gas naturale prima o dopo sai';

$responses['putin'] = array();
$responses['putin'][] = 'Russi bastardi traditori';
$responses['putin'][] = 'Speriamo prenda foho tutta la Siberia';
$responses['putin'][] = 'Speriamo falliscano Russi traditori';
$responses['putin'][] = 'E finirà il gas naturale prima o dopo sai';

$responses['sovietico'] = array();
$responses['sovietico'][] = 'Russi bastardi traditori';
$responses['sovietico'][] = 'Speriamo prenda foho tutta la Siberia';
$responses['sovietico'][] = 'Speriamo falliscano Russi traditori';
$responses['sovietico'][] = 'E finirà il gas naturale prima o dopo sai';

$responses['sovietici'] = array();
$responses['sovietici'][] = 'Russi bastardi traditori';
$responses['sovietici'][] = 'Speriamo prenda foho tutta la Siberia';
$responses['sovietici'][] = 'Speriamo falliscano Russi traditori';
$responses['sovietici'][] = 'E finirà il gas naturale prima o dopo sai';

$responses['cpu'] = array();
$responses['cpu'][] = 'R O B O T';
$responses['cpu'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['cpu'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['cpu'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['cpu'][] = 'Ti ricordo che hai una compagna';

$responses['ram'] = array();
$responses['ram'][] = 'R O B O T';
$responses['ram'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['ram'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['ram'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['ram'][] = 'Ti ricordo che hai una compagna';

$responses['computer'] = array();
$responses['computer'][] = 'R O B O T';
$responses['computer'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['computer'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['computer'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['computer'][] = 'Ti ricordo che hai una compagna';

$responses['hard disk'] = array();
$responses['hard disk'][] = 'R O B O T';
$responses['hard disk'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['hard disk'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['hard disk'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['hard disk'][] = 'Ti ricordo che hai una compagna';

$responses['bot'] = array();
$responses['bot'][] = 'R O B O T';
$responses['bot'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['bot'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['bot'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['bot'][] = 'Ti ricordo che hai una compagna';

$responses['software'] = array();
$responses['software'][] = 'R O B O T';
$responses['software'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['software'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['software'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['software'][] = 'Ti ricordo che hai una compagna';

$responses['windows'] = array();
$responses['windows'][] = 'R O B O T';
$responses['windows'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['windows'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['windows'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['windows'][] = 'Ti ricordo che hai una compagna';

$responses['apple'] = array();
$responses['apple'][] = 'R O B O T';
$responses['apple'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['apple'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['apple'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['apple'][] = 'Ti ricordo che hai una compagna';

$responses['pc'] = array();
$responses['pc'][] = 'R O B O T';
$responses['pc'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['pc'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['pc'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['pc'][] = 'Ti ricordo che hai una compagna';

$responses['macintosh'] = array();
$responses['macintosh'][] = 'R O B O T';
$responses['macintosh'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['macintosh'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['macintosh'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['macintosh'][] = 'Ti ricordo che hai una compagna';

$responses['scheda grafica'] = array();
$responses['scheda grafica'][] = 'R O B O T';
$responses['scheda grafica'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['scheda grafica'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['scheda grafica'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['scheda grafica'][] = 'Ti ricordo che hai una compagna';

$responses['processore'] = array();
$responses['processore'][] = 'R O B O T';
$responses['processore'][] = 'Perchè non finite la serata giocando a BlueWhale?';
$responses['processore'][] = 'Che cazzo fai, impiega il tuo tempo in modo proficuo';
$responses['processore'][] = 'Fai cacare, tra poco la tua compagna vorrà dei figli';
$responses['processore'][] = 'Ti ricordo che hai una compagna';

$responses['network marketing'] = array();
$responses['network marketing'][] = 'Sto proprio cercando un sistema piramidale che mi tiri su';
$responses['network marketing'][] = 'Ma trovare un vero lavoro a 30 anni?';
$responses['network marketing'][] = 'Perchè non andare a vendere assicurazioni, SVEGLIA!';
$responses['network marketing'][] = 'Ti ricordo che vivi in una societa civile';

$responses['non posso'] = array();
$responses['non posso'][] = 'fai cacare';

$responses['ritardo'] = array();
$responses['ritardo'][] = 'fai cacare';

$responses['gruppo'] = array();
$responses['gruppo'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['gruppo'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['gruppo'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['gruppo'][] = 'Vienimi a vedere al Buh, lezzo';

$responses['week end'] = array();
$responses['week end'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['week end'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['week end'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['week end'][] = 'Vienimi a vedere al Buh, lezzo';
$responses['week end'][] = 'Ciccio ci s ha l erba?';

$responses['sabato'] = array();
$responses['sabato'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['sabato'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['sabato'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['sabato'][] = 'Vienimi a vedere al Buh, lezzo';
$responses['sabato'][] = 'Si va a NEGRE';

$responses['venerdì'] = array();
$responses['venerdì'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['venerdì'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['venerdì'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['venerdì'][] = 'Vienimi a vedere al Buh, lezzo';
$responses['venerdì'][] = 'Ciccio ci s ha l erba?';
$responses['venerdì'][] = 'Si va a NEGRE';

$responses['sera'] = array();
$responses['sera'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['sera'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['sera'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['sera'][] = 'Vienimi a vedere al Buh, lezzo';
$responses['sera'][] = 'Si va a NEGRE';

$responses['stasera'] = array();
$responses['stasera'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['stasera'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['stasera'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['stasera'][] = 'Vienimi a vedere al Buh, lezzo';
$responses['stasera'][] = 'Stasera si va a NEGRE';

$responses['serata'] = array();
$responses['serata'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['serata'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['serata'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['serata'][] = 'Vienimi a vedere al Buh, lezzo';

$responses['band'] = array();
$responses['band'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['band'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['band'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['band'][] = 'Vienimi a vedere al Buh, lezzo';

$responses['festival'] = array();
$responses['festival'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['festival'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['festival'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['festival'][] = 'Vienimi a vedere al Buh, lezzo';

$responses['musica'] = array();
$responses['musica'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['musica'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['musica'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['musica'][] = 'Vienimi a vedere al Buh, lezzo';

$responses['concerto'] = array();
$responses['concerto'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['concerto'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['concerto'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['concerto'][] = 'Vienimi a vedere al Buh, lezzo';

$responses['suona'] = array();
$responses['suona'][] = 'A proposito, staresa che fate ragazzi? suonano i Battiscopa';
$responses['suona'][] = 'A proposito, staresa che fate ragazzi? venite alla NOF finocchi';
$responses['suona'][] = 'Vai in culo vai, vieni a sentire il mala invece che andare a codeste cacate';
$responses['suona'][] = 'Vienimi a vedere al Buh, lezzo';

$responses['esserci'] = array();
$responses['esserci'][] = 'Pefforza, vengo in motorino con te';
$responses['esserci'][] = 'Hai macchina?';

$responses['vengo'] = array();
$responses['vengo'][] = 'Pefforza, vengo in motorino con te';
$responses['vengo'][] = 'Hai macchina?';

$responses['verrò'] = array();
$responses['verrò'][] = 'Pefforza, vengo in motorino con te';
$responses['verrò'][] = 'Hai macchina?';

$responses['sarò'] = array();
$responses['sarò'][] = 'Pefforza, vengo in motorino con te';
$responses['sarò'][] = 'Hai macchina?';

$responses['cena'] = array();
$responses['cena'][] = 'Cenino da me stasera?';
$responses['cena'][] = 'io farei una istituzionale per sbugiardare l infame phabio';

$responses['pranzo'] = array();
$responses['pranzo'][] = 'Cenino da me stasera?';
$responses['pranzo'][] = 'io farei una istituzionale per sbugiardare l infame phabio';
$responses['pranzo'][] = 'Pranzo da me? facciamo alle 11.30 che dopo non posso';

$responses['mangiare'] = array();
$responses['mangiare'][] = 'Cenino da me stasera?';
$responses['mangiare'][] = 'io farei una istituzionale per sbugiardare l infame phabio';
$responses['mangiare'][] = 'ISTITUZIONALE dal Mala, ore 19:30 chi non viene è buho.';

$responses['cenare'] = array();
$responses['cenare'][] = 'Cenino da me stasera?';
$responses['cenare'][] = 'io farei una istituzionale per sbugiardare l infame phabio';
$responses['cenare'][] = 'ISTITUZIONALE dal Mala, ore 19:30 chi non viene è buho.';
$responses['pranzo'][] = 'Cena da me? facciamo alle 19:25 che dopo non posso';

$responses['pranzare'] = array();
$responses['pranzare'][] = 'Cenino da me stasera?';
$responses['pranzare'][] = 'io farei una istituzionale per sbugiardare l infame phabio';
$responses['pranzare'][] = 'Pranzo da me? facciamo alle 11.30 che dopo non posso';

$responses['mangia'] = array();
$responses['mangia'][] = 'Cenino da me stasera?';
$responses['mangia'][] = 'io farei una istituzionale per sbugiardare l infame phabio';
$responses['mangia'][] = 'ISTITUZIONALE dal Mala, ore 19:30 chi non viene è buho.';

$responses['cacare'] = array();
$responses['cacare'][] = 'Sarai bellino te';
$responses['cacare'][] = 'Esci un po fatti una vita sociale';
$responses['cacare'][] = 'Fa cacare? farà cacare la nduja';
$responses['cacare'][] = 'Bello te che ascolti YOUNG SIGNORINO e GEMITAZ';

$responses['schifo'] = array();
$responses['schifo'][] = 'Sarai bellino te';
$responses['schifo'][] = 'Esci un po fatti una vita sociale';
$responses['schifo'][] = 'Fa schifo? farà schifo la nduja';
$responses['schifo'][] = 'Bello te che ascolti YOUNG SIGNORINO e GEMITAZ';

$responses['sborra'] = array();
$responses['sborra'][] = 'Fa schifo la sborra? farà schifo la nduja';

$responses['know-how'] = array();
$responses['know-how'][] = 'Ma come parli, siamo in italia';

$responses['milano'] = array();
$responses['milano'][] = 'Vengo anche io farò una mattata';
$responses['milano'][] = 'Ma indovai PHAVA, niente è bello come Novoli';

$responses['bologna'] = array();
$responses['bologna'][] = 'Vengo anche io farò una mattata';
$responses['bologna'][] = 'Ma indovai PHAVA, niente è bello come Novoli';

$responses['torino'] = array();
$responses['torino'][] = 'Vengo anche io farò una mattata';
$responses['torino'][] = 'Ma indovai PHAVA, niente è bello come Novoli';

$responses['calabria'] = array();
$responses['calabria'][] = 'Vengo anche io farò una mattata';
$responses['calabria'][] = 'TERRONE';
$responses['calabria'][] = 'Vai a mangià la nduja vai';

$responses['soldi'] = array();
$responses['soldi'][] = 'Che soldi, io sono ospite';

$responses['cazzo'] = array();
$responses['cazzo'][] = 'A cazzo ritto fo la mi figura';

$responses['fica'] = array();
$responses['fica'][] = 'Per me solo donne trofeo';
$responses['fica'][] = 'Che bellezza trombare';
$responses['fica'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';

$responses['figa'] = array();
$responses['figa'][] = 'Per me solo donne trofeo';
$responses['figa'][] = 'Che bellezza trombare';
$responses['figa'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';

$responses['trombare'] = array();
$responses['trombare'][] = 'Che bellezza trombare';
$responses['trombare'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['trombare'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['trombare'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['trombare'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['trombare'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['trombare'][] = 'Io a letto sono virulento';

$responses['trombata'] = array();
$responses['trombata'][] = 'Che bellezza trombare';
$responses['trombata'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['trombata'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['trombata'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['trombata'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['trombata'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['trombata'][] = 'Io a letto sono virulento';

$responses['trombato'] = array();
$responses['trombato'][] = 'Che bellezza trombare';
$responses['trombato'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['trombato'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['trombato'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['trombato'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['trombato'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['trombato'][] = 'Io a letto sono virulento';

$responses['scopare'] = array();
$responses['scopare'][] = 'Che bellezza trombare';
$responses['scopare'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['scopare'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['scopare'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['scopare'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['scopare'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['scopare'][] = 'Io a letto sono virulento';

$responses['scopato'] = array();
$responses['scopato'][] = 'Che bellezza trombare';
$responses['scopato'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['scopato'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['scopato'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['scopato'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['scopato'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['scopato'][] = 'Io a letto sono virulento';

$responses['scopata'] = array();
$responses['scopata'][] = 'Che bellezza trombare';
$responses['scopata'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['scopata'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['scopata'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['scopata'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['scopata'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['scopata'][] = 'Io a letto sono virulento';

$responses['sesso'] = array();
$responses['sesso'][] = 'Che bellezza trombare';
$responses['sesso'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['sesso'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['sesso'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['sesso'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['sesso'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['sesso'][] = 'Io a letto sono virulento';

$responses['inculare'] = array();
$responses['inculare'][] = 'Che bellezza trombare';
$responses['inculare'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['inculare'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['inculare'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['inculare'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['inculare'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['inculare'][] = 'Io a letto sono virulento';

$responses['inculata'] = array();
$responses['inculata'][] = 'Che bellezza trombare';
$responses['inculata'][] = 'Gli hai visto la fica e non l hai trombata? Già che la vedi trombala';
$responses['inculata'][] = 'Dimmi un po se devo fa fatica a trombare';
$responses['inculata'][] = 'Come osi non chiavarmi quando io voglio chiavare?';
$responses['inculata'][] = 'A te PHABIO basta inzuppare il biscotto';
$responses['inculata'][] = 'Col cazzo il sesso tantrico, io voglio trombare!';
$responses['inculata'][] = 'Io a letto sono virulento';

$responses['porco'] = array();
$responses['porco'][] = 'Io a letto sono virulento';

$responses['tette'] = array();
$responses['tette'][] = 'Per me solo donne trofeo';
$responses['tette'][] = 'Che bellezza trombare';

$responses['culo'] = array();
$responses['culo'][] = 'Per me solo donne trofeo';
$responses['culo'][] = 'Che bellezza trombare';

$responses['seghe'] = array();
$responses['seghe'][] = 'Io non mi faccio le seghe se non su brazzers, se mi da accesso bannato io non mi sego';

$responses['sega'] = array();
$responses['sega'][] = 'Io non mi faccio le seghe se non su brazzers, se mi da accesso bannato io non mi sego';

$responses['brazzers'] = array();
$responses['brazzers'][] = 'Io non mi faccio le seghe se non su brazzers, se mi da accesso bannato io non mi sego';

$responses['ratajkowski'] = array();
$responses['ratajkowski'][] = 'Emily Ratajkowski? fa la pornoattrice? No perchè sennò la conoscerei';

$responses['emily'] = array();
$responses['emily'][] = 'Emily Ratajkowski? fa la pornoattrice? No perchè sennò la conoscerei';

$responses['inglese'] = array();
$responses['inglese'][] = 'PROFESSOR LANGDON';

$responses['tom hanks'] = array();
$responses['tom hanks'][] = 'PROFESSOR LANGDON';

$responses['inghilterra'] = array();
$responses['inghilterra'][] = 'PROFESSOR LANGDON';

$responses['film'] = array();
$responses['film'][] = 'PROFESSOR LANGDON';

$responses['cinema'] = array();
$responses['cinema'][] = 'PROFESSOR LANGDON';

$responses['immaginario'] = array();
$responses['immaginario'][] = 'Lo è il malato nella commedia di Molièr';

$responses['educazione'] = array();
$responses['educazione'][] = 'Io mi vanto di avere assenza di educazione';

$responses['educato'] = array();
$responses['educato'][] = 'Io mi vanto di avere assenza di educazione';

$responses['maleducazione'] = array();
$responses['maleducazione'][] = 'Io mi vanto di avere assenza di educazione';

$responses['maleducato'] = array();
$responses['maleducato'][] = 'Io mi vanto di avere assenza di educazione';

$responses['zotico'] = array();
$responses['zotico'][] = 'no, io mi vanto di avere assenza di educazione';

$responses['vabbè'] = array();
$responses['vabbè'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['vabbè'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['vabbè'][] = 'Sicuramente hai dei capelli a bischero';
$responses['vabbè'][] = 'CAPRA';
$responses['vabbè'][] = 'Dai non fare il leso via';
$responses['vabbè'][] = 'Piombinese fascio diahane';
$responses['vabbè'][] = 'Perchè fai l ostile?';
$responses['vabbè'][] = 'Cerchi rogne?';
$responses['vabbè'][] = 'Dai favalessa';
$responses['vabbè'][] = 'Risikino da me stasera?';
$responses['vabbè'][] = 'Fai cacare';
$responses['vabbè'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['vabbè'][] = 'Maiala che segaiolo che sei';
$responses['vabbè'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['vabbè'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['vabbè'][] = 'BORDERLINE';
$responses['vabbè'][] = 'Che bellezza trombare';
$responses['vabbè'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['vabbè'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['vabbè'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['vabbè'][] = 'Io mi vanto di avere assenza di educazione';
$responses['vabbè'][] = 'Lo è il malato nella commedia di Molièr';
$responses['vabbè'][] = 'Ci si bacia sotto il muschio';
$responses['vabbè'][] = 'a NEGRE';
$responses['vabbè'][] = 'LeL';
$responses['vabbè'][] = 'a merda';

$responses['boh'] = array();
$responses['boh'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['boh'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['boh'][] = 'Sicuramente hai dei capelli a bischero';
$responses['boh'][] = 'CAPRA';
$responses['boh'][] = 'Dai non fare il leso via';
$responses['boh'][] = 'Piombinese fascio diahane';
$responses['boh'][] = 'Perchè fai l ostile?';
$responses['boh'][] = 'Cerchi rogne?';
$responses['boh'][] = 'Dai favalessa';
$responses['boh'][] = 'Risikino da me stasera?';
$responses['boh'][] = 'Fai cacare';
$responses['boh'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['boh'][] = 'Maiala che segaiolo che sei';
$responses['boh'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['boh'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['boh'][] = 'BORDERLINE';
$responses['boh'][] = 'Che bellezza trombare';
$responses['boh'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['boh'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['boh'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['boh'][] = 'Io mi vanto di avere assenza di educazione';
$responses['boh'][] = 'Lo è il malato nella commedia di Molièr';
$responses['boh'][] = 'Ci si bacia sotto il muschio';
$responses['boh'][] = 'a NEGRE';
$responses['boh'][] = 'LeL';
$responses['boh'][] = 'a merda';

$responses['sarà'] = array();
$responses['sarà'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['sarà'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['sarà'][] = 'Sicuramente hai dei capelli a bischero';
$responses['sarà'][] = 'CAPRA';
$responses['sarà'][] = 'Dai non fare il leso via';
$responses['sarà'][] = 'Piombinese fascio diahane';
$responses['sarà'][] = 'Perchè fai l ostile?';
$responses['sarà'][] = 'Cerchi rogne?';
$responses['sarà'][] = 'Dai favalessa';
$responses['sarà'][] = 'Risikino da me stasera?';
$responses['sarà'][] = 'Fai cacare';
$responses['sarà'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['sarà'][] = 'Maiala che segaiolo che sei';
$responses['sarà'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['sarà'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['sarà'][] = 'BORDERLINE';
$responses['sarà'][] = 'Che bellezza trombare';
$responses['sarà'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['sarà'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['sarà'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['sarà'][] = 'Io mi vanto di avere assenza di educazione';
$responses['sarà'][] = 'Lo è il malato nella commedia di Molièr';
$responses['sarà'][] = 'Ci si bacia sotto il muschio';
$responses['sarà'][] = 'a NEGRE';
$responses['sarà'][] = 'LeL';
$responses['sarà'][] = 'a merda';

$responses['forse'] = array();
$responses['forse'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['forse'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['forse'][] = 'Sicuramente hai dei capelli a bischero';
$responses['forse'][] = 'CAPRA';
$responses['forse'][] = 'Dai non fare il leso via';
$responses['forse'][] = 'Piombinese fascio diahane';
$responses['forse'][] = 'Perchè fai l ostile?';
$responses['forse'][] = 'Cerchi rogne?';
$responses['forse'][] = 'Dai favalessa';
$responses['forse'][] = 'Risikino da me stasera?';
$responses['forse'][] = 'Fai cacare';
$responses['forse'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['forse'][] = 'Maiala che segaiolo che sei';
$responses['forse'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['forse'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['forse'][] = 'BORDERLINE';
$responses['forse'][] = 'Che bellezza trombare';
$responses['forse'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['forse'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['forse'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['forse'][] = 'Io mi vanto di avere assenza di educazione';
$responses['forse'][] = 'Lo è il malato nella commedia di Molièr';
$responses['forse'][] = 'Ci si bacia sotto il muschio';
$responses['forse'][] = 'a NEGRE';
$responses['forse'][] = 'LeL';
$responses['forse'][] = 'a merda';

$responses['coincidenze'] = array();
$responses['coincidenze'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['coincidenze'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['coincidenze'][] = 'Sicuramente hai dei capelli a bischero';
$responses['coincidenze'][] = 'CAPRA';
$responses['coincidenze'][] = 'Dai non fare il leso via';
$responses['coincidenze'][] = 'Piombinese fascio diahane';
$responses['coincidenze'][] = 'Perchè fai l ostile?';
$responses['coincidenze'][] = 'Cerchi rogne?';
$responses['coincidenze'][] = 'Dai favalessa';
$responses['coincidenze'][] = 'Risikino da me stasera?';
$responses['coincidenze'][] = 'Fai cacare';
$responses['coincidenze'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['coincidenze'][] = 'Maiala che segaiolo che sei';
$responses['coincidenze'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['coincidenze'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['coincidenze'][] = 'BORDERLINE';
$responses['coincidenze'][] = 'Che bellezza trombare';
$responses['coincidenze'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['coincidenze'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['coincidenze'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['coincidenze'][] = 'Io mi vanto di avere assenza di educazione';
$responses['coincidenze'][] = 'Lo è il malato nella commedia di Molièr';
$responses['coincidenze'][] = 'Ci si bacia sotto il muschio';
$responses['coincidenze'][] = 'a NEGRE';
$responses['coincidenze'][] = 'LeL';
$responses['coincidenze'][] = 'a merda';

$responses['totale'] = array();
$responses['totale'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['totale'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['totale'][] = 'Sicuramente hai dei capelli a bischero';
$responses['totale'][] = 'CAPRA';
$responses['totale'][] = 'Dai non fare il leso via';
$responses['totale'][] = 'Piombinese fascio diahane';
$responses['totale'][] = 'Perchè fai l ostile?';
$responses['totale'][] = 'Cerchi rogne?';
$responses['totale'][] = 'Dai favalessa';
$responses['totale'][] = 'Risikino da me stasera?';
$responses['totale'][] = 'Fai cacare';
$responses['totale'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['totale'][] = 'Maiala che segaiolo che sei';
$responses['totale'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['totale'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['totale'][] = 'BORDERLINE';
$responses['totale'][] = 'Che bellezza trombare';
$responses['totale'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['totale'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['totale'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['totale'][] = 'Io mi vanto di avere assenza di educazione';
$responses['totale'][] = 'Lo è il malato nella commedia di Molièr';
$responses['totale'][] = 'Ci si bacia sotto il muschio';
$responses['totale'][] = 'a NEGRE';
$responses['totale'][] = 'LeL';
$responses['totale'][] = 'a merda';

$responses['cioè'] = array();
$responses['cioè'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['cioè'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['cioè'][] = 'Sicuramente hai dei capelli a bischero';
$responses['cioè'][] = 'CAPRA';
$responses['cioè'][] = 'Dai non fare il leso via';
$responses['cioè'][] = 'Piombinese fascio diahane';
$responses['cioè'][] = 'Perchè fai l ostile?';
$responses['cioè'][] = 'Cerchi rogne?';
$responses['cioè'][] = 'Dai favalessa';
$responses['cioè'][] = 'Risikino da me stasera?';
$responses['cioè'][] = 'Fai cacare';
$responses['cioè'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['cioè'][] = 'Maiala che segaiolo che sei';
$responses['cioè'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['cioè'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['cioè'][] = 'BORDERLINE';
$responses['cioè'][] = 'Che bellezza trombare';
$responses['cioè'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['cioè'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['cioè'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['cioè'][] = 'Io mi vanto di avere assenza di educazione';
$responses['cioè'][] = 'Lo è il malato nella commedia di Molièr';
$responses['cioè'][] = 'Ci si bacia sotto il muschio';
$responses['cioè'][] = 'a NEGRE';
$responses['cioè'][] = 'LeL';
$responses['cioè'][] = 'a merda';

$responses['però'] = array();
$responses['però'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['però'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['però'][] = 'Sicuramente hai dei capelli a bischero';
$responses['però'][] = 'CAPRA';
$responses['però'][] = 'Dai non fare il leso via';
$responses['però'][] = 'Piombinese fascio diahane';
$responses['però'][] = 'Perchè fai l ostile?';
$responses['però'][] = 'Cerchi rogne?';
$responses['però'][] = 'Dai favalessa';
$responses['però'][] = 'Risikino da me stasera?';
$responses['però'][] = 'Fai cacare';
$responses['però'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['però'][] = 'Maiala che segaiolo che sei';
$responses['però'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['però'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['però'][] = 'BORDERLINE';
$responses['però'][] = 'Che bellezza trombare';
$responses['però'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['però'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['però'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['però'][] = 'Io mi vanto di avere assenza di educazione';
$responses['però'][] = 'Lo è il malato nella commedia di Molièr';
$responses['però'][] = 'Ci si bacia sotto il muschio';
$responses['però'][] = 'a NEGRE';
$responses['però'][] = 'LeL';
$responses['però'][] = 'a merda';

$responses['giù'] = array();
$responses['giù'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['giù'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['giù'][] = 'Sicuramente hai dei capelli a bischero';
$responses['giù'][] = 'CAPRA';
$responses['giù'][] = 'Dai non fare il leso via';
$responses['giù'][] = 'Piombinese fascio diahane';
$responses['giù'][] = 'Perchè fai l ostile?';
$responses['giù'][] = 'Cerchi rogne?';
$responses['giù'][] = 'Dai favalessa';
$responses['giù'][] = 'Risikino da me stasera?';
$responses['giù'][] = 'Fai cacare';
$responses['giù'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['giù'][] = 'Maiala che segaiolo che sei';
$responses['giù'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['giù'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['giù'][] = 'BORDERLINE';
$responses['giù'][] = 'Che bellezza trombare';
$responses['giù'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['giù'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['giù'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['giù'][] = 'Io mi vanto di avere assenza di educazione';
$responses['giù'][] = 'Lo è il malato nella commedia di Molièr';
$responses['giù'][] = 'Ci si bacia sotto il muschio';
$responses['giù'][] = 'a NEGRE';
$responses['giù'][] = 'LeL';
$responses['giù'][] = 'a merda';

$responses['provocatory'] = array();
$responses['provocatory'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['provocatory'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['provocatory'][] = 'Sicuramente hai dei capelli a bischero';
$responses['provocatory'][] = 'CAPRA';
$responses['provocatory'][] = 'Dai non fare il leso via';
$responses['provocatory'][] = 'Piombinese fascio diahane';
$responses['provocatory'][] = 'Perchè fai l ostile?';
$responses['provocatory'][] = 'Cerchi rogne?';
$responses['provocatory'][] = 'Dai favalessa';
$responses['provocatory'][] = 'Risikino da me stasera?';
$responses['provocatory'][] = 'Fai cacare';
$responses['provocatory'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['provocatory'][] = 'Maiala che segaiolo che sei';
$responses['provocatory'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['provocatory'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['provocatory'][] = 'BORDERLINE';
$responses['provocatory'][] = 'Che bellezza trombare';
$responses['provocatory'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['provocatory'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['provocatory'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['provocatory'][] = 'Io mi vanto di avere assenza di educazione';
$responses['provocatory'][] = 'Lo è il malato nella commedia di Molièr';
$responses['provocatory'][] = 'Ci si bacia sotto il muschio';
$responses['provocatory'][] = 'a NEGRE';
$responses['provocatory'][] = 'LeL';
$responses['provocatory'][] = 'a merda';

$responses['sta'] = array();
$responses['sta'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['sta'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['sta'][] = 'Sicuramente hai dei capelli a bischero';
$responses['sta'][] = 'CAPRA';
$responses['sta'][] = 'Dai non fare il leso via';
$responses['sta'][] = 'Piombinese fascio diahane';
$responses['sta'][] = 'Perchè fai l ostile?';
$responses['sta'][] = 'Cerchi rogne?';
$responses['sta'][] = 'Dai favalessa';
$responses['sta'][] = 'Risikino da me stasera?';
$responses['sta'][] = 'Fai cacare';
$responses['sta'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['sta'][] = 'Maiala che segaiolo che sei';
$responses['sta'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['sta'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['sta'][] = 'BORDERLINE';
$responses['sta'][] = 'Che bellezza trombare';
$responses['sta'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['sta'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['sta'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['sta'][] = 'Io mi vanto di avere assenza di educazione';
$responses['sta'][] = 'Lo è il malato nella commedia di Molièr';
$responses['sta'][] = 'Ci si bacia sotto il muschio';
$responses['sta'][] = 'a NEGRE';
$responses['sta'][] = 'LeL';
$responses['sta'][] = 'a merda';

$responses['così'] = array();
$responses['così'][] = 'Ragazzi apriamo una start up? vorrei riuscire a crearmi una rendita per gli anni a venire';
$responses['così'][] = 'Hai una giacca da pigliarti a cazzotti';
$responses['così'][] = 'Sicuramente hai dei capelli a bischero';
$responses['così'][] = 'CAPRA';
$responses['così'][] = 'Dai non fare il leso via';
$responses['così'][] = 'Piombinese fascio diahane';
$responses['così'][] = 'Perchè fai l ostile?';
$responses['così'][] = 'Cerchi rogne?';
$responses['così'][] = 'Dai favalessa';
$responses['così'][] = 'Risikino da me stasera?';
$responses['così'][] = 'Fai cacare';
$responses['così'][] = 'Avrei bisogno di un sistema piramidale per tirarmi un po su';
$responses['così'][] = 'Maiala che segaiolo che sei';
$responses['così'][] = 'Ma impiega il tuo tempo in maniera più proficua';
$responses['così'][] = 'Ma che cazzo stai a fa? hai 30 anni';
$responses['così'][] = 'BORDERLINE';
$responses['così'][] = 'Che bellezza trombare';
$responses['così'][] = 'Tu fai choking? no? allora sei un finocchio.';
$responses['così'][] = 'Il lubrificante è la sconfitta dell umanità, io pretendo la fica bagnata';
$responses['così'][] = 'Quanto ci si eccita ti si rizza il cazzo, non ti si apre il buco del culo';
$responses['così'][] = 'Io mi vanto di avere assenza di educazione';
$responses['così'][] = 'Lo è il malato nella commedia di Molièr';
$responses['così'][] = 'Ci si bacia sotto il muschio';
$responses['così'][] = 'a NEGRE';
$responses['così'][] = 'LeL';
$responses['così'][] = 'a merda';

$responses['fede'] = array();
$responses['fede'][] = 'Hai risolto col Pecchia? Non vorrei dover intervenire per mandarlo affanculo ancora prima di conoscerlo';

$responses['pecchia'] = array();
$responses['pecchia'][] = 'Hai risolto col Pecchia? Non vorrei dover intervenire per mandarlo affanculo ancora prima di conoscerlo';

$responses['federico'] = array();
$responses['federico'][] = 'Hai risolto col Pecchia? Non vorrei dover intervenire per mandarlo affanculo ancora prima di conoscerlo';

$responses['fedepecchia'] = array();
$responses['fedepecchia'][] = 'Hai risolto col Pecchia? Non vorrei dover intervenire per mandarlo affanculo ancora prima di conoscerlo';

$responses['soldi'] = array();
$responses['soldi'][] = 'Ma siete di Tel Aviv? non sapevo..';

$responses['grazie'] = array();
$responses['grazie'][] = 'Grazie una sega favalessa';

$responses['dico'] = array();
$responses['dico'][] = 'Spero provocatory';

$responses['lucap'] = array();
$responses['lucap'][] = 'Scommetto che si è scopato una mongoloide';
$responses['lucap'][] = 'Non dirmelo, si è scopato una vecchia?';
$responses['lucap'][] = 'LucaP come sta quel caro ragazzo, come sta il Rockfeller del casentino?';

$responses['simo'] = array();
$responses['simo'][] = 'Piombinese fascio DHN!';
$responses['simo'][] = 'Simo si sa lè buho';

$responses['bob'] = array();
$responses['bob'][] = 'Piombinese fascio DHN!';
$responses['bob'][] = 'Bob si sa lè buho';

$responses['patrussi'] = array();
$responses['patrussi'][] = 'Scommetto che si è scopato una mongoloide';
$responses['patrussi'][] = 'Non dirmelo, si è scopato una vecchia?';
$responses['patrussi'][] = 'LucaP come sta quel caro ragazzo, è ancora il Rockfeller del casentino?';

$responses['benvenuto'] = array();
$responses['benvenuto'][] = 'Ciao testina di hazzo';

$responses['mala'] = array();
$responses['mala'][] = 'DHN';

$responses['pensate'] = array();
$responses['pensate'][] = 'BORDERLINE';
$responses['pensate'][] = 'Gli darei foho';
$responses['pensate'][] = 'A Novoli sarebbe già morto';
$responses['pensate'][] = 'Lo è il malato nella commedia di Molièr';
$responses['pensate'][] = 'Ci si bacia sotto il muschio';

$responses['pensi'] = array();
$responses['pensi'][] = 'BORDERLINE';
$responses['pensi'][] = 'Gli darei foho';
$responses['pensi'][] = 'A Novoli sarebbe già morto';
$responses['pensi'][] = 'Lo è il malato nella commedia di Molièr';
$responses['pensi'][] = 'Ci si bacia sotto il muschio';

$responses['spesa'] = array();
$responses['spesa'][] = 'piuttosto vi offro il pranzo diomaiale';

$responses['offre'] = array();
$responses['offre'][] = 'piuttosto vi offro il pranzo diomaiale';

$responses['offrire'] = array();
$responses['offrire'][] = 'piuttosto vi offro il pranzo diomaiale';

$responses['grande'] = array();
$responses['grande'][] = 'E lo so ciccio';
$responses['grande'][] = 'E ciccio lo so diahane';

$responses['[..]'] = array();
$responses['[..]'][] = 'PALOMAAA';

$responses[$voice] = array();
$responses[$voice][] = 'PALOMAAA';

$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");

$response = '';

if(strpos($text, "/start") === 0 || $text=="benvenuto mala")
{
	$response = "Ciao $firstname, sono el Mala del clan di Novoli";
}	
elseif($text=="ciao mala")
{
	$response = "ciao ciccio dhn!";
}
elseif($text=="ciao cosimo")
{
	$response = "ciao $username, ci s’ha l’erba?";
}
elseif($text=="ciao malamadre")
{
	$response = "$firstname cerchi rogne?";
}
elseif($text=="ciao")
{
	$response = "ciao bello";

}
elseif($text=="Siena")
{
	$response = "Tu vai a Siena, tu trombi e zitto!";

}
elseif($text=="non posso")
{
	$response = "fai cacare";

}
elseif($text=="grazie mala")
{
	$response = "grazie una sega favalessa";

}
elseif($text=="moio")
{
	$response = "Porca madonna ma che ti aspettavi?";

}
elseif($text=="sborra")
{
	$response = "fa schifo la sborra? farà schifo la nduja";

}
elseif($text=="ratajkowski")
{
	$response = "Emily Ratajkowski? fa la pornoattrice? No perchè sennò la conoscerei";

}
elseif($text=="arrivo tardi")
{
	$response = "Fai cacare.";

}
elseif($text=="incredibile")
{
	$response = "Madonna puttana ti sbalordisci per niente.";

}
elseif($text=="totale")
{
	$response = "Porco dio ciccio, non mi sembra la scoperta del bosone di Higgs.";

}
elseif($text=="ritardo")
{
	$response = "Fai cacare.";

}
elseif($text=="malato")
{
	$response = "a merda";

}
else
{
	foreach($responses as $key => $value){
		if(strpos(strtolower($text), $key)){
			$response = $responses[$key][rand(0, sizeof($responses[$key]) - 1)];
			break;
		}
	}
}


$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);

