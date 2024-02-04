<!DOCTYPE HTML>
<HTML dir="ltr" lang="fr">
  <!-- Mirrored from www.shipito.com/fr/shipito-for-direct-sales by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:46:08 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <!-- /Added by HTTrack -->
  @include('layouts.head-guest')

  <BODY>
    <DIV ID="menu-filler"></DIV>
    <A NAME="page-top" ID="page-top"></A>
    @include('layouts.header-guest')

    <DIV CLASS="main-body">
      <STYLE TYPE="text/css">
        .top-banner-outer {
          background-image: url("shipito/fr/imgs/directsales/PartnersBanner_Rev.jpg");
          background-size: auto 492px;
          background-position: center bottom;
        }

        .top-banner-inner H1 {
          color: #FFFFFF;
        }

        .top-banner-inner P {
          color: #FFFFFF;
        }

        .tiles .tile {
          position: relative;
        }

        .tiles .tile .step {
          display: block;
          position: absolute;
          font-size: 18px;
          text-align: center;
          top: 40px;
          left: 30px;
          width: 24px;
          line-height: 22px;
          vertical-align: middle;
          border: solid 1px #000000;
          border-radius: 50%;
        }

        HTML[dir="rtl"] .tiles .tile .step {
          left: auto;
          right: 20px;
        }

        .tiles .tile P:first-of-type {
          margin-top: 0px;
        }

        .tiles .tile1 {
          background-color: #EAEAEA;
        }

        .tiles .tile2 {
          background-color: #E2E2E2;
        }

        .tiles .tile3 {
          background-color: #D7D7D7;
        }

        .tiles .tile4 {
          background-color: #F4F4F4;
        }

        .tiles .tile IMG {
          margin: 0px auto 0px auto;
        }

        .global-access {
          background-color: #20284D;
          color: #FFFFFF;
          padding: 40px 40px 100px 40px;
          background-image: url("shipito/fr/imgs/directsales/Partners_Globe.svg");
          background-position: center bottom;
          background-repeat: no-repeat;
          background-size: auto 100px;
        }

        .global-access .btn {
          border: solid 1px #FFFFFF;
          color: #FFFFFF;
          text-transform: uppercase;
          font-size: 14px;
          font-weight: 500;
          display: inline-block;
          margin: 30px;
          padding: 20px;
        }

        OL.blue-numbers {
          list-style: none;
          counter-reset: st-counter;
          padding-left: 60px;
          margin-top: 0px;
        }

        HTML[dir="rtl"] OL.blue-numbers {
          padding-left: 0px;
          padding-right: 60px;
        }

        OL.blue-numbers LI {
          counter-increment: st-counter;
          margin: 20px 0px 20px 0px;
          padding-left: 0px;
          position: relative;
          line-height: 24px;
        }

        OL.blue-numbers LI STRONG {
          color: #20284D;
        }

        OL.blue-numbers LI::before {
          content: counter(st-counter);
          position: absolute;
          left: -40px;
          top: -3px;
          color: #FFFFFF;
          border-radius: 50%;
          font-weight: 500;
          background-color: #20284D;
          display: inline-block;
          height: 30px;
          width: 30px;
          text-align: center;
          line-height: 30px;
          vertical-align: middle;
        }

        HTML[dir="rtl"] OL.blue-numbers LI::before {
          left: auto;
          right: -40px;
        }

        .interested DIV IMG {
          margin: 0px -15px 0px -15px;
          width: calc(100% + 30px);
          max-width: calc(100% + 30px);
        }

        .interested DIV H3 {
          margin: 40px 0px 40px 0px;
          font-weight: 500;
          font-size: 16px;
        }

        .interested DIV P {
          padding: 0px 40px 0px 40px;
          margin-bottom: 80px;
        }

        .interested DIV .btn {
          text-transform: uppercase;
        }

        .interested {
          background-color: #F1F1F1;
        }

        @media (min-width:767px) {
          .interested {
            display: flex;
            align-items: center;
            justify-content: center;
          }

          .interested DIV {
            flex: 1;
            text-align: center;
          }

          .tiles {
            display: flex;
            position: relative;
          }

          .tiles .tile {
            flex: 1;
            justify-content: center;
            align-items: center;
            padding: 40px 80px 40px 80px;
            min-height: 550px;
          }

          HTML[dir="rtl"] .tiles .tile {
            padding: 40px 80px 40px 80px;
          }

          .tiles .tile1 IMG {
            margin: 80px auto 40px auto;
            width: calc(80% - 80px);
          }

          .tiles .tile2 IMG {
            margin: 20px auto 20px auto;
            width: calc(80% - 160px);
          }

          .tiles .tile3 IMG {
            margin: 100px auto 0px auto;
            width: 80%;
          }

          .tiles .tile4 IMG {
            margin: 60px auto -40px auto;
            width: 80%;
          }
        }

        @media (min-width:1025px) {
          .slide-position {
            transform: translateY(-20px);
          }

          .logo-mobile {
            display: none;
          }
        }

        @media (max-width:767px) {
          .slide-position {
            transform: translateY(-25px);
          }
          .logo-desktop {
                display: none;
            }
          .top-banner-outer {
            background-image: url("shipito/fr/imgs/directsales/Partners_HeaderMobile_Rev.jpg");
          }

          .tiles .tile {
            padding: 20px 40px 20px 40px;
          }

          .tiles .tile .step {
            left: 10px;
            top: 20px;
          }

          HTML[dir="rtl"] .tiles .tile .step {
            left: auto;
            right: 10px;
          }

          .tiles .tile IMG {
            width: 100%;
          }

          .tiles .tile1 IMG {
            margin: 40px auto 40px auto;
          }

          .tiles .tile2 IMG {
            margin: 20px auto 20px auto;
            width: calc(100% - 80px);
          }

          .tiles .tile3 IMG {
            margin: 40px auto 20px auto;
          }

          .tiles .tile4 IMG {
            margin: 40px auto 20px auto;
          }

          .interested DIV .btn {
            margin-bottom: 40px;
          }

          OL.blue-numbers {
            margin-bottom: 0px;
          }

          OL.blue-numbers LI:last-of-type {
            margin: 20px 0px 0px 0px;
          }
        }
      </STYLE>
      <DIV CLASS="container-fluid top-banner-outer">
        <DIV CLASS="container top-banner-inner">
          <H1>Confiez vos envois internationaux à Lynia</H1>
          <P> Rendez votre entreprise de vente directe accessible aux distributeurs et aux consommateurs de plus de 200 pays et territoires du monde entier. </P>
        </DIV>
      </DIV>
      <SECTION CLASS="container">
        <H2 CLASS="section-title">
          <SPAN>Opérationnel en quelques jours seulement</SPAN>
        </H2>
        <P> Votre entreprise se trouvera grandi par l'addition de distributeurs internationaux. En revanche, l’expédition de vos produits aux distributeurs du monde entier peut être un véritable casse-tête, n’est-ce pas ? Lynia a considérablement simplifié le processus d'expédition transfrontalière pour les vendeurs directs. </P>
        <P> Les exigences réglementaires de chaque pays, le recouvrement des droits de douane et des taxes, et le dédouanement ne sont que quelques-unes des complexités auxquelles les vendeurs directs doivent faire face pour se développer dans la distribution et les ventes transfrontalières. </P>
        <P> Lynia fournit aux vendeurs directs une solution clé en main, permettant de commencer à expédier vos produits à vos distributeurs internationaux en quelques jours. Pour vous soulager, nous gérons le processus de conformité aux réglementations, le recouvrement et les versements des droits de douane et des taxes, ainsi que le dédouanement. Nous pouvons offrir ces services pour plus de 200 pays et territoires. </P>
      </SECTION>
      <SECTION CLASS="container">
        <H2 CLASS="section-title">
          <SPAN>Comprendre comment Lynia fonctionne pour les vendeurs directs</SPAN>
        </H2>
        <DIV CLASS="row tiles">
          <DIV CLASS="col-xs-12 col-sm-6 tile tile1">
            <DIV CLASS="step">1</DIV>
            <DIV>
              <P> Vos distributeurs s’inscrivent à un compte Lynia gratuit, leur donnant accès à une adresse de livraison en France. </P>
              <IMG SRC="shipito/fr/imgs/directsales/Partner_Step1Cropped.svg" BORDER="0" CLASS="img-responsive">
              <P CLASS="text-center"> Inscrivez-vous et obtenez une adresse en France. </P>
            </DIV>
          </DIV>
          <DIV CLASS="col-xs-12 col-sm-6 tile tile2">
            <DIV CLASS="step">2</DIV>
            <DIV>
              <P> Ils utilisent ensuite leur adresse Lynia au moment de régler les produits achetés sur votre site internet. Et nous nous chargeons du reste. </P>
              <IMG SRC="shipito/fr/imgs/directsales/Partner_Step2a%20Cropped.svg" BORDER="0" CLASS="img-responsive">
              <P CLASS="text-center"> Les distributeurs achètent sur votre site internet </P>
              <IMG SRC="shipito/fr/imgs/directsales/Partner_Step2bRev.svg" BORDER="0" CLASS="img-responsive">
              <P CLASS="text-center"> Ils utilisent leur adresse Lynia au moment du paiement </P>
            </DIV>
          </DIV>
        </DIV>
        <DIV CLASS="row tiles">
          <DIV CLASS="col-xs-12 col-sm-6 tile tile3">
            <DIV CLASS="step">3</DIV>
            <DIV>
              <P> Les produits sont expédiés vers l’un des entrepôts de Lynia où ils sont photographiés, inspesctés et regroupés en un seul paquet si besoin. </P>
              <IMG SRC="shipito/fr/imgs/directsales/Partner_Step3Cropped.svg" BORDER="0" CLASS="img-responsive">
            </DIV>
          </DIV>
          <DIV CLASS="col-xs-12 col-sm-6 tile tile4">
            <DIV CLASS="step">4</DIV>
            <DIV>
              <P> Vos distributeurs peuvent choisir parmi 15 services d’expédition différents pour l’international, y compris DHL, UPS et USPS. Lynia s’assure que vos produits leur sont livrés intacts et de manière ponctuelle. </P>
              <IMG SRC="shipito/fr/imgs/directsales/Partner_Step4_6.15.23.svg" BORDER="0" CLASS="img-responsive hide-sm">
              <IMG SRC="shipito/fr/imgs/directsales/Partner_Step4_M_6.15.23.svg" BORDER="0" CLASS="img-responsive hide-lg">
            </DIV>
          </DIV>
        </DIV>
      </SECTION>
      <SECTION CLASS="container-fluid global-access">
        <DIV CLASS="text-center">
          <IMG SRC="shipito/fr/imgs/directsales/Global-Access-Logo-White-LL.png" BORDER="0" CLASS="logo-image">
          <P CLASS="text-center"> Il vous faut plus de preuves? La maison mère de Lynia, <STRONG>GlobalAccess</STRONG>, finaliste de l’année pour ¨DSA partner¨, est le partenaire de confiance de certaines des plus grandes entreprises de ventes directes pour l’expédition de leurs produits, qui se chiffrent en milliards de dollars depuis 2002. </P>
          <A href="#" TARGET="_blank" CLASS="btn btn-large">Se rendre sur Global Access</A>
        </DIV>
      </SECTION>
      <SECTION CLASS="container">
        <H2 CLASS="section-title">
          <SPAN>Pourquoi choisir Lynia pour vos ventes directes ?</SPAN>
        </H2>
        <OL CLASS="blue-numbers">
          <LI>Nous pouvons vous aider à rapidement donner une dimension internationale à votre entreprise, et ce avec très peu d’efforts.</LI>
          <LI>Vous vous associez à un leader de l’expédition transfrontalière, riche de <STRONG>12 ans</STRONG> d’expériences. </LI>
          <LI>Nous expédions des colis par millions nous permettant ainsi de négocier les meilleurs prix auprès des transporteurs pour le bénéfice de vos distributeurs.</LI>
          <LI>Aucun autre concurrent n’offre autant de choix de transporteurs et de services que ceux que nous offrons à vos distributeurs. </LI>
          <LI>Notre API vous permet d’approvisionner harmonieusement les comptes Lynia et vous fournit des adresses américaines pour vos distributeurs internationaux. </LI>
          <LI>Vos distributeurs vont adorer les avantages mis à leurs dispositions tels que : réductions exclusives sur les coûts d’expédition, services d’ <A href="#">envoi express™</A> et de <A href="#">regroupement de colis</A>, et programme de <A href="#">récompenses pour les abonnés Lynia™</A>. </LI>
        </OL>
      </SECTION>
      <SECTION CLASS="container">
        <DIV CLASS="row interested">
          <DIV CLASS="col-xs-12 col-sm-6">
            <IMG SRC="shipito/fr/imgs/directsales/PartnersImage2.jpg" BORDER="0" CLASS="img-responsive">
          </DIV>
          <DIV CLASS="col-xs-12 col-sm-6 text-center">
            <H3>Intéressant?</H3>
            <P> Plus d’informations sur la mannière dont le programme de vente directe de Lynia peut résoudre vos problèmes d’envois internationaux </P>
            <A href="#" CLASS="btn btn-primary btn-lg">Contacter Lynia</A>
          </DIV>
        </DIV>
      </SECTION>
      <DIV CLASS="signup-banner bottom-signup-banner">
        <DIV CLASS="container">
          <DIV CLASS="text-center">
            <DIV>Commencez à faire des économies dès aujourd’hui !</DIV>
          </DIV>
          <DIV CLASS="text-center us-address">
            <DIV>Obtenez une adresse américaine gratuite !</DIV>
          </DIV>
          <DIV CLASS="text-center">
            <DIV>
              <A href="#" CLASS="btn">INSCRIVEZ-VOUS GRATUITEMENT</A>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
    </DIV>
    <FOOTER CLASS="top-footer">
      <DIV CLASS="container">
        <DIV CLASS="row">
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/CompetitivePricing.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">La tarification compétitive de Lynia</SPAN>
            <SPAN CLASS="advantage-description">Nos prix hautement compétitifs vous permettent d’économiser sur les frais d’expédition.</SPAN>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/InternationalDelivery.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">Livraison internationale</SPAN>
            <SPAN CLASS="advantage-description">Nos offres sont parmi les meilleures pour les envois internationaux</SPAN>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/SecurePayment.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">Modes de paiement sécurisés</SPAN>
            <SPAN CLASS="advantage-description">Effectuer vos paiements en toute sérénité grâce à nos systèmes Safe Pay</SPAN>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6 text-center advantage">
            <SPAN CLASS="advantage-image">
              <IMG SRC="shipito/fr/imgs/navigation/ShopSafely.svg">
            </SPAN>
            <SPAN CLASS="advantage-service">Achetez en toute sécurité</SPAN>
            <SPAN CLASS="advantage-description">Avec nous, votre compte est constamment protégé</SPAN>
          </DIV>
        </DIV>
      </DIV>
    </FOOTER>
    <FOOTER CLASS="bottom-footer">
      <DIV CLASS="container">
        <DIV CLASS="row hide-sm">
          <DIV CLASS="col-md-3 col-xs-6">
            <LABEL>Nos services</LABEL>
            <A href="#">Lynia Pour Mois</A>
            <A href="#">Lynia Pour les Entreprises</A>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6">
            <LABEL>Débuter</LABEL>
            <A href="#">Comment ça Marche</A>
            <A href="#">Tarifs et Options</A>
            <A href="#">FAQs</A>
            <A href="#">Modes de livraison</A>
            <A href="#">Que puis-je expédier ?</A>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6">
            <LABEL>À Propos de Nous</LABEL>
            <A href="#">Qu'est-ce que Lynia</A>
            <A href="#">Emplacements des entrepôts</A>
            <A href="#">Blog</A>
            <A href="#">Actualités</A>
            <A href="#">Commentaires des clients</A>
            <A href="#">Programme d’Affiliation</A>
            <A href="#">Vendeurs directs</A>
            <A href="#">US Unlocked</A>
          </DIV>
          <DIV CLASS="col-md-3 col-xs-6">
            <LABEL>Prenez Contact Avec Nous</LABEL>
            <DIV CLASS="contact">
              <A href="#">
                <I CLASS="icon-contact-us"></I> Prenez Contact Avec Nous </A>
            </DIV>
            <DIV CLASS="contact">
              <A href="#">
                <IMG SRC="shipito/fr/imgs/navigation/email.svg" HEIGHT="20" WIDTH="20" CLASS="hide-sm">
                <IMG SRC="shipito/fr/imgs/navigation/email_m.svg" HEIGHT="20" WIDTH="20" CLASS="hide-lg"> support@shipito.com </A>
            </DIV>
            <DIV CLASS="contact">
              <I CLASS="icon-live-chat"></I> Chat en direct (Heure du Pacifique): <BR>En semaine: 6h à 18h <BR>Samedi: 6h à 15h <BR>Dimanche: Fermé
            </DIV>
          </DIV>
        </DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-xs-12 col-sm-6 pull-right sm-icons sm-icons-fr text-right">
            <LABEL>&nbsp;</LABEL>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-facebook"></I>
            </A>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-twitter"></I>
            </A>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-youtube"></I>
            </A>
            <A href="#" TARGET="_blank">
              <I CLASS="icon-instagram"></I>
            </A>
          </DIV>
        </DIV>
        <DIV CLASS="row">
          <DIV CLASS="col-xs-12 text-center privacy">
            <A href="#">Règles de confidentialité</A> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <A href="#">Conditions Générales</A>
            <BR> Copyright &copy; 2024 Lynia. All rights reserved.
          </DIV>
        </DIV>
      </DIV>
    </FOOTER>
    <A href="#" CLASS="back-to-top-link" TITLE="Retour Vers le Haut">
      <IMG SRC="shipito/fr/imgs/navigation/BackToTop.svg">
    </A>

    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
      window.__lc = window.__lc || {};
      window.__lc.license = 3392252;;
      (function(n, t, c) {
        function i(n) {
          return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
          _q: [],
          _h: null,
          _v: "2.0",
          on: function() {
            i(["on", c.call(arguments)])
          },
          once: function() {
            i(["once", c.call(arguments)])
          },
          off: function() {
            i(["off", c.call(arguments)])
          },
          get: function() {
            if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
            return i(["get", c.call(arguments)])
          },
          call: function() {
            i(["call", c.call(arguments)])
          },
          init: function() {
            var n = t.createElement("script");
            n.async = !0, n.type = "text/javascript", n.src = "shipito/cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
          }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
      }(window, document, [].slice))
    </script>
    <noscript>
      <a href="#" rel="nofollow">Chat with us</a>, powered by <a href="#" rel="noopener nofollow" target="_blank">LiveChat</a>
    </noscript>
    <!-- End of LiveChat code -->
    <SCRIPT>
      $(document).ready(function() {
        if ($('#banner-container').length) {
          $('#banner-container').load('/fr/banner-ads?pg=/shipito-for-direct-sales');
        }
      });
    </SCRIPT>
  </BODY>
  <!-- Mirrored from www.shipito.com/fr/shipito-for-direct-sales by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2024 13:46:22 GMT -->
</HTML>
<!--- Copyright 2024 GlobalAccess All Rights Reserved -->
<!--- Web Server 3088 -->
