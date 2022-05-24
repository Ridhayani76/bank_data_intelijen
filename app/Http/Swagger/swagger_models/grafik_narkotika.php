<?php

/**
  * @OA\Get(
  *      path="/v1/entities/grafik-narkotika",
  *      operationId="browseD.IN.11-DataGrafikPerkaraNarkotikadanZatAdiktif",
  *      tags={"grafik-narkotika"},
  *      summary="Browse D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      description="Returns list of D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/grafik-narkotika/read?slug=grafik-narkotika&id={id}",
  *      operationId="readD.IN.11-DataGrafikPerkaraNarkotikadanZatAdiktif",
  *      tags={"grafik-narkotika"},
  *      summary="Get D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif based on id",
  *      description="Returns D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/grafik-narkotika/add",
  *      operationId="addD.IN.11-DataGrafikPerkaraNarkotikadanZatAdiktif",
  *      tags={"grafik-narkotika"},
  *      summary="Insert new D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      description="Insert new D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"foto":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/grafik-narkotika/edit",
  *      operationId="editD.IN.11-DataGrafikPerkaraNarkotikadanZatAdiktif",
  *      tags={"grafik-narkotika"},
  *      summary="Edit an existing D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      description="Edit an existing D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"foto":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/grafik-narkotika/delete",
  *      operationId="deleteD.IN.11-DataGrafikPerkaraNarkotikadanZatAdiktif",
  *      tags={"grafik-narkotika"},
  *      summary="Delete one record of D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      description="Delete one record of D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="grafik-narkotika",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/grafik-narkotika/delete-multiple",
  *      operationId="deleteMultipleD.IN.11-DataGrafikPerkaraNarkotikadanZatAdiktif",
  *      tags={"grafik-narkotika"},
  *      summary="Delete multiple record of D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      description="Delete multiple record of D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="grafik-narkotika",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/grafik-narkotika/sort",
  *      operationId="sortD.IN.11-DataGrafikPerkaraNarkotikadanZatAdiktif",
  *      tags={"grafik-narkotika"},
  *      summary="Sort existing D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      description="Sort existing D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="grafik-narkotika",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "foto":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "foto":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="foto"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */