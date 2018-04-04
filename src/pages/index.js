import React from 'react'
import Link from 'gatsby-link'
import Helmet from 'react-helmet';
import Navbar, { NavBarSpacer } from '../components/Navbar';
import BigTitle from '../components/BigTitle';
import BigTitleIcon from '../components/BigTitleIcon';
import faLightbulb from '@fortawesome/fontawesome-free-solid/faLightbulb';
import Footer from '../components/Footer';
import PageContainer from '../lib/PageContainer';
import TransparentContainer from '../components/Containers/TransparentContainer';
import LandingContainer from '../components/Containers/LandingContainer';
import WhiteBigTitle from '../components/WhiteBigTitle';
import WhiteParagraph from '../components/WhiteParagraph';
import WhiteBigButton from '../components/WhiteBigButton';
import RightImage from '../components/RightImage';
import Paragraph from '../components/Paragraph';
import Carousel from '../components/Carousel';
import landingScreen from '../img/landing-screen.jpg';
import platformerSceneEditor from '../img/platformer-scene-editor.png';
import platformer2SceneEditor from '../img/platformer2-scene-editor.png';
import spaceShooterSceneEditor from '../img/space-shooter-scene-editor.png';
import pathfindingTankSceneEditor from '../img/pathfinding-tank-scene-editor.png';
import Spacer from '../components/Grid/Spacer';
import Row from '../components/Grid/Row';
import CenteredRow from '../components/Grid/CenteredRow';
import CenteredColumn from '../components/Grid/CenteredColumn';
import config from '../config';
export default class IndexPage extends React.Component {
  render() {
    return (
    <PageContainer {...this.props.pathContext}>
    {t => (
        <div>
        <Helmet
          title="Gatsby Default Starter"
          meta={[
            { name: 'description', content: 'Sample' },
            { name: 'keywords', content: 'sample, something' },
          ]}
        />
        <Navbar t={t} />
              <LandingContainer>
              <NavBarSpacer />
              <WhiteBigTitle>{t('Create your own games')}</WhiteBigTitle>
              <Spacer height={'20px'} />
              <Row reverse>
                <CenteredColumn flex={8}>
                  <RightImage
                    width="1095"
                    height="734"
                    src={landingScreen}
                    alt={t(
                      'GDevelop game maker software - create video games without coding'
                    )}
                    title={t('Make your own games with GDevelop')}
                  />
                </CenteredColumn>
                <CenteredColumn flex={5}>
                  <WhiteParagraph textAlign="center">
                    {t(
                      'GDevelop is an open-source, cross-platform game creator designed to be used by everyone - no programming skills required.'
                    )}
                  </WhiteParagraph>
                  <CenteredRow>
                    <WhiteBigButton
                      to={config.onlineEditorUrl}
                      alt="_blank"
                      rel="noopener"
                      category="webapp"
                      label="webapp"
                    >
                      {t('Try it online')}
                    </WhiteBigButton>
                    <WhiteBigButton to="/download/">
                      {t('Download')}
                    </WhiteBigButton>
                  </CenteredRow>
                </CenteredColumn>
              </Row>
            </LandingContainer>
             <TransparentContainer>
              <BigTitle>
                <BigTitleIcon icon={faLightbulb} /> {t('Create any game')}
              </BigTitle>
              <Paragraph>
                {t(
                  "Unleash your creativity with GDevelop and create any kind of game: platformers, puzzles, shoot 'em up, strategy... Go through the examples or start a new project from scratch."
                )}
              </Paragraph>
            </TransparentContainer>
            <TransparentContainer noPadding>
              <Carousel
                buttonsDisabled
                autoPlay
                autoPlayInterval={2500}
                responsive={{
                  0: {
                    items: 1,
                  },
                  600: {
                    items: 2,
                  },
                }}
              >
                <img
                  src={platformerSceneEditor}
                  alt={t('Create platformer games with GDevelop')}
                />
                <img
                  src={spaceShooterSceneEditor}
                  alt={t('Create space shooter games with GDevelop')}
                />
                <img
                  src={pathfindingTankSceneEditor}
                  alt={t('Create strategy games with GDevelop')}
                />
                <img
                  src={platformer2SceneEditor}
                  alt={t('Create games with GDevelop')}
                />
              </Carousel>
            </TransparentContainer>
        <Footer t={t} />
        </div>
    )}
     </PageContainer>
    );
  }   
}