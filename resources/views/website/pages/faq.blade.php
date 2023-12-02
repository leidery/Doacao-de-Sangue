<x-guest-layout>
    @include('website.layouts.navbar')

    <x-website.header bgImg="{{ asset('img/bg-header.png') }}">
        <h1>Perguntas Frequentes</h1>
    </x-website.header>

    <div class="container py-5">
      <div class="accordion" id="accordionExample">

        <x-website.accordion
          id="requisitos"
          question="Quais os requisitos para doar de sangue?"
        >
          <ul>
            <li>
              Apresentar documento oficial com foto
              (Carteira de Identidade,
              Carteira do Conselho Profissional,
              Carteira de Trabalho,
              Passaporte ou
              Carteira Nacional de Habilitação)
            </li>

            <li>Ter entre 16 e 69 anos
              <ul>
                <li>
                  Lembramos que menores de idade
                  precisam de autorização
                  e presença do responsável legal! :D
                </li>
              </ul>
            </li>
            <li>Pesar acima de 50 quilos.</li>
            <li>Estar alimentado e evitar consumo de alimentos gordurosos 3 horas antes da doação</li>
          </ul>
        </x-website.accordion>

        <x-website.accordion
          id="impedimentosTemporarios"
          question="Quais os impedimentos temporários para doação de sangue?"
        >
          <ul>
            <li>
              Manifestar sintomas de gripe (tosse, febre, dor de garganta)
              <ul>
                <li>Tempo de espera: 15 dias após a cura</li>
              </ul>
            </li>

            <li>
              Gravidez
              <ul>
                <li>
                  Tempo de espera:
                  <ul>
                    <li>90 dias após parto natural</li>
                    <li>180 dias após parto cesariana</li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              Amamentação
              <ul>
                <li>Tempo de espera: 12 meses após parto natural/cesária</li>
              </ul>
            </li>

            <li>
              Ingestão de bebida alcoólica ou maconha
              <ul>
                <li>Tempo de espera: 12 horas</li>
              </ul>
            </li>

            <li>
              Tatuagem, micropigmentação e piercing
              <ul>
                <li>Tempo de espera: 06 meses (se piercing genital/oral, 12 meses após retirada)</li>
              </ul>
            </li>

            <li>
              Botox, ácido hialurônico ou outros procedimentos em face
              <ul>
                <li>Tempo de espera: 15 dias após aplicação</li>
              </ul>
            </li>

            <li>
              Tratamento dentário
              <ul>
                <li>Tempo de espera:
                  <ul>
                    <li>Para limpeza e obturações: 72 horas</li>
                    <li>Para extração e canal: 7 dias</li>
                    <li>Para implante: 3 a 6 meses</li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              Hepatite (pode doar se hepatite antes dos 11 anos)
              <ul>
                <li>
                  Observação:
                  <br>
                  Se você convive na casa de quem teve hepatite:
                  <br>
                  Hepatite B precisa comprovar a imunidade pela vacina
                  <br>
                  Hepatite C comprovação da cura da pessoa que teve Hepatite
                </li>
              </ul>
            </li>

            <li>
              Medicações
              <ul>
                <li>
                  Antibióticos.
                  <ul>
                    <li>Tempo de espera: 15 dias após o término</li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              Diabetes: com uso de insulina não pode doar
            </li>

            <li>
              Hipotiroidismo Hashimoto
              <ul>
                <li>
                  Se a doença NÃO estiver em sua fase aguda, o candidato a doação poderá doar
                </li>
              </ul>
            </li>

            <li>
              Testosterona ou qualquer outro Anabolizante
              <ul>
                <li>Tempo de espera: 06 meses após parar de usar</li>
              </ul>
            </li>

          </ul>
        </x-website.accordion>

        <x-website.accordion
          id="impedimentosDefinitivos"
          question="Quais os impedimentos definitivos para doação de sangue?"
        >
          <ul>
            <li>Hepatite viral após os 11 anos de idade</li>
            <li>Diabetes insulinodependente</li>
            <li>Epilepsia ou convulsão</li>
            <li>Hanseníase</li>
            <li>Doença renal crônica</li>
            <li>Antecedentes de Neoplasias (Câncer)</li>
            <li>Antecedentes de acidente vascular cerebral (Derrame)</li>
            <li>
              Evidência Clínica ou Laboratorial das seguintes doenças transmissíveis pelo sangue:
              Hepatites B e C, AIDS (Vírus HIV)
            </li>
            <li>Doenças associadas ao HTLV I/II e Doença de Chagas</li>
          </ul>
        </x-website.accordion>

        <x-website.accordion
          id="etapasDuranteDoacaoSangue"
          question="Quais as etapas durante a doação de sangue?"
        >
          Após o cadastro, é realizado a triagem clínica onde o avaliador verifica se o doador
          preenche os requisitos para a doação de sangue.
          <p>
            Se apto a doar, é coletado aproximadamente 450ml de sangue.
          </p>
          <p>
            Após a coleta, o doador recebe um lanche e
            deve esperar por 15 minutos nas dependências do local da coleta.
          </p>
          <p>
            O procedimento dura em torno de 40 minutos.
          </p>
        </x-website.accordion>

        <x-website.accordion
          id="cuidadosPosDoarSangue"
          question="Quais os cuidados pós doar sangue?"
        >
          <ul>
            <li>Evite dobrar o braço por aproximadamente 30 minutos.</li>
            <li>Evite carregar peso com o braço em que foi feita a doação por 4 horas</li>
            <li>Evite esforços físicos exagerados no dia da doação.</li>
            <li>Aumente a ingestão de líquidos (água, chá, sucos).</li>
            <li>Não fume por cerca de 2 horas.</li>
            <li>Evite bebidas alcoólicas por 12 horas.</li>
            <li>Mantenha o curativo no local da punção por pelo menos de 4 horas.</li>
          </ul>
        </x-website.accordion>

        <x-website.accordion
          id="pqDoar"
          question="Por que doar sangue?"
        >
          Uma única bolsa de sangue pode salvar a vida de até 3 pessoas.
        </x-website.accordion>

        <x-website.accordion
          id="menor18"
          question="Sou menor de 18, posso doar sangue?"
        >
          Sim! Lembre-se que precisa de autorização e estar acompanhado de seu responsável legal.
        </x-website.accordion>
      </div>

      <div class="pt-5">
          <p class="fw-bold">Referências:</p>
          <ul>
            <li>https://www.saude.pr.gov.br/Pagina/Doacao-de-Sangue</li>
          </ul>
      </div>
    </div>


    @include('website.layouts.footer')
</x-guest-layout>
