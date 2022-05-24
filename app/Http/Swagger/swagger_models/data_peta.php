<?php

/**
  * @OA\Get(
  *      path="/v1/entities/data-peta",
  *      operationId="browseDATAPETAIDEOLOGI,POLITIK,PERTAHANANDANKEAMANAN/SOSIALBUDAYADANKEMASYARAKATAN/EKONOMIDANKEUANGAN/PENGAMANAN,PEMBANGUNANSTRATEGIS/TEKNOLOGIINFORMASIDANPRODUKSIINTELIJEN",
  *      tags={"data-peta"},
  *      summary="Browse DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      description="Returns list of DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
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
  *      path="/v1/entities/data-peta/read?slug=data-peta&id={id}",
  *      operationId="readDATAPETAIDEOLOGI,POLITIK,PERTAHANANDANKEAMANAN/SOSIALBUDAYADANKEMASYARAKATAN/EKONOMIDANKEUANGAN/PENGAMANAN,PEMBANGUNANSTRATEGIS/TEKNOLOGIINFORMASIDANPRODUKSIINTELIJEN",
  *      tags={"data-peta"},
  *      summary="Get DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN based on id",
  *      description="Returns DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN based on id",
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
  *      path="/v1/entities/data-peta/add",
  *      operationId="addDATAPETAIDEOLOGI,POLITIK,PERTAHANANDANKEAMANAN/SOSIALBUDAYADANKEMASYARAKATAN/EKONOMIDANKEUANGAN/PENGAMANAN,PEMBANGUNANSTRATEGIS/TEKNOLOGIINFORMASIDANPRODUKSIINTELIJEN",
  *      tags={"data-peta"},
  *      summary="Insert new DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      description="Insert new DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"simbolSektor":"Abc", "siabidibam":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/data-peta/edit",
  *      operationId="editDATAPETAIDEOLOGI,POLITIK,PERTAHANANDANKEAMANAN/SOSIALBUDAYADANKEMASYARAKATAN/EKONOMIDANKEUANGAN/PENGAMANAN,PEMBANGUNANSTRATEGIS/TEKNOLOGIINFORMASIDANPRODUKSIINTELIJEN",
  *      tags={"data-peta"},
  *      summary="Edit an existing DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      description="Edit an existing DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"simbolSektor":"Abc", "siabidibam":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/data-peta/delete",
  *      operationId="deleteDATAPETAIDEOLOGI,POLITIK,PERTAHANANDANKEAMANAN/SOSIALBUDAYADANKEMASYARAKATAN/EKONOMIDANKEUANGAN/PENGAMANAN,PEMBANGUNANSTRATEGIS/TEKNOLOGIINFORMASIDANPRODUKSIINTELIJEN",
  *      tags={"data-peta"},
  *      summary="Delete one record of DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      description="Delete one record of DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-peta",
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
  *      path="/v1/entities/data-peta/delete-multiple",
  *      operationId="deleteMultipleDATAPETAIDEOLOGI,POLITIK,PERTAHANANDANKEAMANAN/SOSIALBUDAYADANKEMASYARAKATAN/EKONOMIDANKEUANGAN/PENGAMANAN,PEMBANGUNANSTRATEGIS/TEKNOLOGIINFORMASIDANPRODUKSIINTELIJEN",
  *      tags={"data-peta"},
  *      summary="Delete multiple record of DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      description="Delete multiple record of DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-peta",
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
  *      path="/v1/entities/data-peta/sort",
  *      operationId="sortDATAPETAIDEOLOGI,POLITIK,PERTAHANANDANKEAMANAN/SOSIALBUDAYADANKEMASYARAKATAN/EKONOMIDANKEUANGAN/PENGAMANAN,PEMBANGUNANSTRATEGIS/TEKNOLOGIINFORMASIDANPRODUKSIINTELIJEN",
  *      tags={"data-peta"},
  *      summary="Sort existing DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      description="Sort existing DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-peta",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "simbolSektor":"Abc", "siabidibam":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "simbolSektor":"Abc", "siabidibam":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="simbolSektor"), 
  *                         @OA\Property(type="string", property="siabidibam"), 
  *                         @OA\Property(type="string", property="keterangan"), 
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